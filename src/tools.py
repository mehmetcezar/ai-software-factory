import os
import subprocess
from crewai.tools import tool

@tool("Read File Context")
def read_file(file_path: str) -> str:
    """Read the contents of a file to understand existing code or requirements."""
    try:
        with open(file_path, 'r', encoding='utf-8') as f:
            return f.read()
    except Exception as e:
        return f"Error reading file {file_path}: {str(e)}"

@tool("Write File Content")
def write_file(file_path: str, content: str) -> str:
    """Write or overwrite a file with the provided code/content. Creates directories if they don't exist."""
    try:
        # Create directories if they don't exist
        os.makedirs(os.path.dirname(os.path.abspath(file_path)), exist_ok=True)
        
        with open(file_path, 'w', encoding='utf-8') as f:
            f.write(content)
        return f"Successfully wrote to {file_path}"
    except Exception as e:
        return f"Error writing to file {file_path}: {str(e)}"

@tool("Git Operations")
def git_operation(command: str) -> str:
    """Run a git command (e.g., 'git status', 'git add .', 'git commit -m "msg"', 'git push') to manage the repository."""
    # Remove 'git ' prefix if agent includes it
    clean_command = command.strip()
    if clean_command.startswith("git "):
        clean_command = clean_command[4:].strip()
    
    cmd_parts = clean_command.split()
    allowed_actions = ["status", "add", "commit", "push", "pull", "init", "branch", "checkout", "remote", "config"]
    
    if not cmd_parts or cmd_parts[0] not in allowed_actions:
        return f"Error: Git action '{cmd_parts[0] if cmd_parts else 'None'}' is not allowed."

    try:
        # Use shell=True to handle complex arguments or just pass the parts
        # For safety on Windows, we'll construct the list
        full_cmd = ["git"] + cmd_parts
        result = subprocess.run(full_cmd, capture_output=True, text=True, check=True)
        return result.stdout if result.stdout else "Git command executed successfully."
    except subprocess.CalledProcessError as e:
        return f"Error executing git command: {e.stderr if e.stderr else e.stdout}"
    except Exception as e:
        return f"System error during git operation: {str(e)}"
