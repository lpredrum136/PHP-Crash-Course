<?php
$path = '/dir0/dir1/myfile.php';
$file = 'file1.txt';

// Return filename
# echo basename($path);

// Return filename without extension
# echo basename($path, '.php');

// Return dir name from path
# echo dirname($path);

// Check if file or folder exists
# echo file_exists($file);

// Get absolute path
# echo realpath($file);

// Check to see if file
# echo is_file('test');

// Check if file is writable
# echo is_writable($file);

// Check if readable
# echo is_readable($file);

// Get file size in bytes
# echo filesize($file);

// Create directory
# mkdir('testing');

// Delete directory if there's no file in it
# rmdir('testing');

// Copy file
# echo copy($file, 'file2.txt');

// Rename file
# rename('file2.txt', 'myfile.txt');

// Delete file
# unlink('myfile.txt');

// Write from file to string
# echo file_get_contents($file);

// Write string to file (overwrite)
# echo file_put_contents($file, 'Goodbye World');

// Append string to file
/* $current = file_get_contents($file);
$current .= ' Goodbye World';
file_put_contents($file, $current);
 */

// Open file for reading
/* $handle = fopen($file, 'r');
$data = fread($handle, filesize($file));
echo $data;
fclose($handle);
 */

// Open file for writing
$handle = fopen('file2.txt', 'w');
$text = "John Doe\n";
fwrite($handle, $text);
$text = 'Steve Smith';
fwrite($handle, $text);
fclose($handle);
