import unittest
from unittest.mock import patch
from datetime import datetime
from your_module import get_current_date_time

class TestGetCurrentDateTime(unittest.TestCase):
    def test_get_current_date_time(self):
        with patch('datetime.datetime.now') as mock_now:
            mock_now.return_value = datetime(2022, 1, 1, 12, 0, 0)
            self.assertEqual(get_current_date_time(), datetime(2022, 1, 1, 12, 0, 0))

    def test_get_current_date_time_invalid_return_type(self):
        with patch('datetime.datetime.now') as mock_now:
            mock_now.return_value = '2022-01-01 12:00:00'
            with self.assertRaises(TypeError):
                get_current_date_time()

if __name__ == '__main__':
    unittest.main(verbosity=2)