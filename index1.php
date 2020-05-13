<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file">
<button type="submit" name="submit">Upload</button>
</body>
</html>
<?php
	/*if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>
Something is wrong with the XAMPP installation :-(*/

