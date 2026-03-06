from crewai import Task
from textwrap import dedent

class FactoryTasks:
    """
    Defines the standard tasks workflow for the Software Factory.
    """

    def analyze_requirement_task(self, agent, requirement: str):
        return Task(
            description=dedent(f"""\
                Analyze the following user requirement or GitHub issue:
                "{requirement}"
                
                Break it down into technical implementation steps. Identify what files need 
                to be created or modified, and clearly list the acceptance criteria.
            """),
            expected_output="A detailed list of technical implementation steps and acceptance criteria.",
            agent=agent
        )

    def write_code_task(self, agent, context=None):
        return Task(
            description=dedent("""\
                Based on the technical implementation plan, write the required code.
                Ensure that you follow clean code principles and document your functions.
                If modifying an existing file, provide the exact changes needed.
            """),
            expected_output="Valid Python code that implements the requested feature.",
            agent=agent,
            context=context
        )

    def test_code_task(self, agent, context=None):
        return Task(
            description=dedent("""\
                Review the implemented code. Ensure it meets the original requirements and acceptance criteria.
                Write unit tests if necessary, or at minimum provide a list of manual test edge cases.
                Point out any potential bugs or security flaws.
            """),
            expected_output="A QA report confirming the code works, including tests or identified bugs and suggested fixes.",
            agent=agent,
            context=context
        )
