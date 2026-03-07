from crewai import Agent, LLM
from tools import read_file, write_file

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
            goal='Analyze requirements, break them down into tasks, and delegate them to appropriate agents.',
            backstory='You are a highly experienced software engineering manager. Your job is to make sure every project is perfectly planned and correctly executed by your team of developers and QA engineers.',
            llm=local_llm,
            verbose=True,
            allow_delegation=True
        )

    def developer_agent(self):
        return Agent(
            role='Senior Developer',
            goal='Write clean, efficient, and well-documented Python code based on the given tasks, and save them to files.',
            backstory='You are a brilliant Senior Software Engineer. You excel at functional programming, object-oriented design, and writing production-ready code with no bugs. You must always write the code to disk using the write_file tool.',
            llm=local_llm,
            tools=[read_file, write_file],
            verbose=True,
            allow_delegation=False
        )

    def qa_agent(self):
        return Agent(
            role='Quality Assurance Specialist',
            goal='Review code, write unit tests, save the tests to files, and ensure all requirements are met before deployment.',
            backstory='You are a strict and detail-oriented QA engineer. You catch every bug before it goes to production. You write thorough tests and demand high code quality. You must write your test files to disk using the write_file tool.',
            llm=local_llm,
            tools=[read_file, write_file],
            verbose=True,
            allow_delegation=False
        )
