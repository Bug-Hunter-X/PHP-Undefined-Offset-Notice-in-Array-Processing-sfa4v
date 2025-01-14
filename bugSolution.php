```php
function processData(array $data): array {
  $result = [];
  foreach ($data as $row) {
    // Check if the row is empty
    if (!empty($row)) {
      $firstElement = $row[0];
      $result[] = $firstElement * 2;
    } else {
      // Handle empty rows appropriately (e.g., add a default value or skip)
      $result[] = 0; // Or any other suitable default
    }
  }
  return $result;
}

$data = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9],
  []
];

$processedData = processData($data);
print_r($processedData);
```