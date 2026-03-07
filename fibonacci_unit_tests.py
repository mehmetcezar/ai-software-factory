import pytest

def test_fibonacci_positive_number():
    assert fibonacci(10) == 55

def test_fibonacci_negative_number():
    with pytest.raises(ValueError):
        fibonacci(-10)

def test_fibonacci_zero():
    assert fibonacci(0) == 0

def test_fibonacci_one():
    assert fibonacci(1) == 1

# Run the unit tests with pytest
pytest.main(["-v", "fibonacci_unit_tests.py"])