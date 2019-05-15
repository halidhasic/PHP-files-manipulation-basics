<?php
// will print values and the keys of an array so that we can see it, cool function
if (isset($_POST['submit'])) {
	// echo "<pre>";
	// print_r($_FILES['file_upload']);
	// echo "<pre>";
	// an associative array, having a key and the value
	$upload_errors = array(
		UPLOAD_ERR_OK => "There is no error",
		UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive in php.ini",
		UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML ",
		UPLOAD_ERR_PARTIAL => "The uploaded file was only partially uploaded",
		UPLOAD_ERR_NO_FILE => "No file was uploaded",
		UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder",
		UPLOAD_ERR_CANT_WRITE => "Failed to write file to a disk",
		UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload"
	);

	// moving uploaded files
	$temp_name = $_FILES['file_upload']['tmp_name'];
	$the_file = $_FILES['file_upload']['name'];	

	$directory = "uploads";

	if (move_uploaded_file($temp_name, $directory . "/" . $the_file)) {
		$the_message = "File uploaded successfully";
	} else {
		$the_error = $_FILES['file_upload']['error'];
		$the_message = $upload_errors[$the_error];
	}
	// move_uploaded_file($tmp_name, $directory . "/" . $the_file);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<!-- uploading files with the form -->
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<?php 
			if (!empty($upload_errors)) {
				echo $the_message;
			}
		?>
		<input type="file" name="file_upload">
		<br>
		<input type="submit" name="submit">
	</form>
</body>
</html>