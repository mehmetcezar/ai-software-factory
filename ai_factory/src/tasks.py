from crewai import Task
from textwrap import dedent

class FactoryTasks:
    """
    Defines the standard tasks workflow for the Software Factory.
    """

    def analyze_requirement_task(self, agent, requirement: str):
        return Task(
            description=dedent(f"""\
                Analyze the following user requirement: "{requirement}"
                Break it down into technical implementation steps. 
                Identify exactly which Python files need to be created.
                Do not attempt to call any tools for this step; just provide the analysis as text.
            """),
            expected_output="A list of technical implementation steps and file names.",
            agent=agent
        )

    def write_code_task(self, agent, context=None):
        return Task(
            description=dedent("""\
                Based on the analysis, write the Python code.
                You MUST use the 'Write File Content' tool to save your code to the specified file path.
                Do not just output the code; save it to disk.
            """),
            expected_output="Confirmation that the code was written to a specific file.",
            agent=agent,
            context=context
        )

    def test_code_task(self, agent, context=None):
        return Task(
            description=dedent("""\
                Review the implemented code. 
                Write unit tests and use the 'Write File Content' tool to save them to a test file (e.g., tests/test_*.py).
                Ensure the tests cover the requirements.
            """),
            expected_output="A QA report and confirmation that test files were saved.",
            agent=agent,
            context=context
        )

    def push_to_github_task(self, agent, context=None):
        return Task(
            description=dedent("""\
                Using the 'Git Operations' tool, add all newly created or modified files to the repository.
                Commit the changes with a concise and descriptive commit message.
                Finally, push the changes to the remote 'main' branch.
                If any authentication error occurs, report it.
            """),
            expected_output="Confirmation that changes were committed and pushed to GitHub.",
            agent=agent,
            context=context
        )

    def research_codebase_task(self, agent, codebase_path: str):
        return Task(
            description=dedent(f"""\
                Analyze the codebase at '{codebase_path}'. 
                Identify the core components, folder structure, entry points, and database connection details.
                Provide a summary that will help developer agents understand how to work on this project.
            """),
            expected_output="A comprehensive architecture overview document (Markdown).",
            agent=agent
        )
