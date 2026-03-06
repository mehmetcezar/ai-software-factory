import os
from dotenv import load_dotenv

# Load environment variables
load_dotenv()

def main():
    print("Welcome to the AI Software Factory!")
    print("Initializing the Orchestrator Agent...")
    
    # Check for API Key
    if not os.getenv("OPENAI_API_KEY"):
        print("\n[WARNING] OPENAI_API_KEY is not set in the .env file.")
        print("The factory agents require an API key to function.")
        print("Please add 'OPENAI_API_KEY=your_key_here' to your .env file.")
        return

    print("API Key found. Factory is ready to receive tasks.")

if __name__ == "__main__":
    main()
