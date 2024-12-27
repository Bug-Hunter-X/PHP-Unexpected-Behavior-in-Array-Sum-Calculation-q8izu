<?php
function calculateSum(array $numbers): int|string {
  if (empty($numbers)) {
    return "Error: The input array is empty.";
  }

  foreach ($numbers as $number) {
    if (!is_numeric($number)) {
      return "Error: The input array contains non-numeric values.";
    }
  }
  return array_sum($numbers);
}

// Example usage
$numbers1 = [1, 2, 3, 4, 5];
echo calculateSum($numbers1) . "\n"; // Output: 15

$numbers2 = [];
echo calculateSum($numbers2) . "\n"; // Output: Error: The input array is empty.

$numbers3 = [1, 2, 'a', 4, 5];
echo calculateSum($numbers3) . "\n"; // Output: Error: The input array contains non-numeric values.
?> 