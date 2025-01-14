# PHP Undefined Offset Notice
This repository demonstrates a common PHP error: the "Undefined offset" notice.  The error occurs when trying to access an array element using an index that doesn't exist.  Specifically, this example shows how this error can arise when processing an array of arrays where an inner array might be empty.

The `bug.php` file contains the buggy code that throws the notice.  `bugSolution.php` provides a corrected version.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter (e.g., `php bug.php`).
3. Observe the "Undefined offset" notice.

## Solution
The solution is to add a check to ensure the inner array is not empty before attempting to access its elements.