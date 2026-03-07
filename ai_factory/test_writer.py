import unittest
from your_module import RandomNumberGenerator

class TestRandomNumberGenerator(unittest.TestCase):
    def test_generate_number(self):
        random_number_generator = RandomNumberGenerator()
        self.assertTrue(1 <= random_number_generator.generate_number() <= 100)

if __name__ == '__main__':
    unittest.main()