```php
function calculateAverage(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 40, 0];
echo calculateAverage($numbers); // Output: 20

$numbers = [10, 20, 30, 40];
echo calculateAverage($numbers);

$numbers = [];
echo calculateAverage($numbers); //Output: 0
```