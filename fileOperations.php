<?php
//write from a file
$filename = "example.txt";
$content = "Hello, this is a sample content.\n";

// Open the file in write mode (creates the file if it doesn't exist)
$file = fopen($filename, "w");

if ($file) {
  fwrite($file, $content); // Write to the file
  fclose($file); // Close the file
  echo "File '$filename' created and written successfully.";
} else {
  echo "Unable to open file!";
}



//read from a file
// Check if the file exists
if (file_exists($filename)) {
  $file = fopen($filename, "r"); // Open the file in read mode
  $content = fread($file, filesize($filename)); // Read the file content
  fclose($file); // Close the file

  echo "File Content:<br>";
  echo ($content); // Display the content with newlines
} else {
  echo "File '$filename' does not exist.";
}


//appending into a file
$newContent = "This is additional content.\n";

// Open the file in append mode
$file = fopen($filename, "a");

if ($file) {
  fwrite($file, $newContent); // Append new content
  fclose($file); // Close the file
  echo "Content appended to '$filename'.";
} else {
  echo "Unable to open file!";
}

// //deleting a file

// // Check if the file exists before deleting
// if (file_exists($filename)) {
//   if (unlink($filename)) { // Delete the file
//     echo "File '$filename' deleted successfully.";
//   } else {
//     echo "Unable to delete file!";
//   }
// } else {
//   echo "File '$filename' does not exist.";
// }
