<?php
$numbers = [7, 2, 28, 3, 5, 18, 17, 6];

// Sort in ascending order
sort($numbers);

// Display the sorted array in ascending order
echo "Ascending Order: " . implode(", ", $numbers);

// Reverse to get descending order
$descendingNumbers = array_reverse($numbers);

// Display the sorted array in descending order
echo "<br>Descending Order: " . implode(", ", $descendingNumbers);