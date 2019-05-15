<?php
	// magic constants, the give the location of the files, directories, the line of the code that we are in, with file at the end
 echo __FILE__ . "<br>"; //gives the whole pathe of the file
 echo __LINE__ . "<br>"; //gives the line where the code is
 echo __DIR__ . "<br>"; //gives the whole directory path, without the file included at the end, ends with directory

 // functions
 // following function checks if the file or directory exists
 if (file_exists(__DIR__)) {
 	echo "Yes <br>";
 }
 // following function checks if the directory or a file is a file
 if (is_file(__DIR__)) {
 	echo "Yes <br>";
 } else {
 	echo "No <br>";
 }

 if (is_file(__FILE__)) {
 	echo "Yes <br>";
 } else {
 	echo "No <br>";
 }

 // following function checks if the value is a directory
 if (is_dir(__DIR__)) {
 	echo "Yes <br>";
 } else {
 	echo "No <br>";
 }

 if (is_dir(__FILE__)) {
 	echo "Yes <br>";
 } else {
 	echo "No <br>";
 }

 // ternary operator, shorthand version of the if statement, ? = then, : = else
 echo file_exists(__FILE__) ? "yes" : "no";
?>