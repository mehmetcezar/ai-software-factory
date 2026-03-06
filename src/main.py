import os
from dotenv import load_dotenv
from crewai import Crew, Process

from agents import FactoryAgents
from tasks import FactoryTasks

# Load environment variables
load_dotenv()

def run_software_factory(requirement: str):
    print(f"\n--- Starting Software Factory ---")
    print(f"Goal: {requirement}\n")

    # Instantiate Agents
    agents = FactoryAgents()
    orchestrator = agents.orchestrator_agent()
    developer = agents.developer_agent()
    qa = agents.qa_agent()

    # Instantiate Tasks
    tasks = FactoryTasks()
    
    # 1. Orchestrator analyzes requirement
    analysis_task = tasks.analyze_requirement_task(orchestrator, requirement)
    
    # 2. Developer writes code based on analysis
    coding_task = tasks.write_code_task(developer, context=[analysis_task])
    
    # 3. QA reviews the written code
    review_task = tasks.test_code_task(qa, context=[coding_task])

    # Build the Crew
    factory_crew = Crew(
        agents=[orchestrator, developer, qa],
        tasks=[analysis_task, coding_task, review_task],
        process=Process.sequential,  # Tasks run in sequence
        verbose=True
    )

    # Begin the work
    result = factory_crew.kickoff()
    
    print("\n######################")
    print("FACTORY RUN COMPLETED")
    print("######################\n")
    print(result)

def main():
    print("Welcome to the AI Software Factory!")
    print("Initializing...")
    
    # API Key check removed: We are now using local Ollama.
    # Note: CrewAI/LiteLLM might still expect some dummy API key in the environment,
    # but we don't need a real OpenAI key.
    if not os.getenv("OPENAI_API_KEY"):
        os.environ["OPENAI_API_KEY"] = "NA" # Dummy key for LiteLLM just in case
        
    print("Local LLM Factory ready to accept tasks.")
    
    # Demonstration request
    sample_request = "Create a Python function that calculates the Fibonacci sequence up to a given number, including type hints and unit tests."
    user_input = input(f"\nEnter a task for the factory (or press Enter to use the default sample):\n> ")
    
    if not user_input.strip():
        user_input = sample_request
        
    run_software_factory(user_input)

if __name__ == "__main__":
    main()
