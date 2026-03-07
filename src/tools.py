import os
from langchain.tools import tool

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
