<?php

$filename = "sample-file.txt"; // Name of the file

// Create a file
if (!file_exists($filename)) {
    $file = fopen($filename, "w");
    fclose($file);
    echo "File '$filename' created successfully.<br><br>";
} else {
    echo "File '$filename' already exists.<br><br>";
}

// Write text to the file
$content = "Sample data/text written in a file.";
file_put_contents($filename, $content);
echo "Text written to '$filename' successfully.<br><br>";

// Read the file
if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo "Contents of '$filename':<br>";
    echo $content . "\n";
} else {
    echo "File '$filename' does not exist.<br>";
}

// Delete the file
if (file_exists($filename)) {
    unlink($filename);
    echo "<br><br>File '$filename' deleted successfully.\n";
} else {
    echo "<br><br>File '$filename' does not exist.\n";
}