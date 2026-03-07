import typing
def fibonacci_function(input_number: int) -> typing.List[int]:
    
    # Initialize the Fibonacci sequence with the first two numbers
    fibonacci_sequence = [0, 1]

    # Calculate the Fibonacci sequence up to the given input number
    while fibonacci_sequence[-1] < input_number:
        fibonacci_sequence.append(fibonacci_sequence[-1] + fibonacci_sequence[-2])

    # Return the Fibonacci sequence
    return fibonacci_sequence

# Define the unit tests for the Fibonacci function
class TestFibonacci:
    def test_fibonacci_small_number(self):
        # Test the Fibonacci function with a small number
        self.assertEqual(fibonacci_function(10), [0, 1, 1, 2, 3, 5, 8])

    def test_fibonacci_large_number(self):
        # Test the Fibonacci function with a large number
        self.assertEqual(fibonacci_function(100), [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89])

    def test_fibonacci_invalid_input(self):
        # Test the Fibonacci function with an invalid input (negative number)
        self.assertEqual(fibonacci_function(-10), [0, 1, 1, 2, 3, 5, 8])

# Run the unit tests
if __name__ == "__main__":
    import unittest
    unittest.main()