```php
function processData(array $data): array {
  // Assume $data is an array of arrays, where each inner array represents a row of data.
  // Each inner array has at least one element.

  $result = [];
  foreach ($data as $row) {
    // Try to access the first element of each row
    $firstElement = $row[0];
    
    // Perform some operation with the first element.
    $result[] = $firstElement * 2;  
  }
  return $result;
}

$data = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9],
  [] //This is the problematic row
];

$processedData = processData($data);
print_r($processedData); 
```