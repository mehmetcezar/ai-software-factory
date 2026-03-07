from crewai import Agent, LLM
from tools import read_file, write_file, git_operation, list_dir

# Configure the local Ollama LLM
# Note: You can change "llama3.1" to "phi3" or any other model you have downloaded in Ollama.
local_llm = LLM(
    model="ollama/llama3.1",
    base_url="http://localhost:11434"
)

class FactoryAgents:
    """
    Defines the roles and goals for the specialized agents in our Software Factory.
    """

    def orchestrator_agent(self):
        return Agent(
            role='Software Factory Manager (Orchestrator)',
            goal='Analyze requirements, break them down into tasks, and delegate them to appropriate agents. Do NOT attempt to use tools you do not have.',
            backstory='You are a highly experienced software engineering manager. Your job is to plan and delegate. You do not write code or files yourself; you only analyze and coordinate. Stick to your designated role.',
            llm=local_llm,
            verbose=True,
            allow_delegation=True,
            max_iter=10
        )

    def developer_agent(self):
        return Agent(
            role='Senior Developer',
            goal='Write clean, efficient, and well-documented Python code based on the given tasks. You MUST save your code to files using the write_file tool.',
            backstory='You are a brilliant Senior Software Engineer. You excel at writing production-ready code. You only have access to read_file and write_file tools. Do not try to use any other tools.',
            llm=local_llm,
            tools=[read_file, write_file],
            verbose=True,
            allow_delegation=False,
            max_iter=10
        )

    def qa_agent(self):
        return Agent(
            role='Quality Assurance Specialist',
            goal='Review code and write unit tests. You MUST save your tests to files using the write_file tool.',
            backstory='You are a strict QA engineer. You catch bugs and write thorough tests. You only have access to read_file and write_file tools. Do not try to use any other tools.',
            llm=local_llm,
            tools=[read_file, write_file],
            verbose=True,
            allow_delegation=False,
            max_iter=10
        )

    def devops_agent(self):
        return Agent(
            role='DevOps Engineer',
            goal='Manage the repository using Git operations. Add, commit, and push files to GitHub.',
            backstory='You are an expert DevOps engineer who ensures code is properly versioned and deployed. You use the "Git Operations" tool to manage the repository.',
            llm=local_llm,
            tools=[git_operation],
            verbose=True,
            allow_delegation=False,
            max_iter=10
        )

    def software_architect(self):
        return Agent(
            role='Software Architect',
            goal='Research the existing codebase, understand the architecture, and document it for others.',
            backstory='You are a master architect who can quickly understand complex systems. You scan the codebase to identify patterns, database schemas, and API endpoints.',
            llm=local_llm,
            tools=[read_file, list_dir],
            verbose=True,
            allow_delegation=False,
            max_iter=15
        )
