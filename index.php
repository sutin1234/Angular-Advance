<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>iFileUpload</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		Selected file : <input type="file" name="fileUpload" required>
		<button type="submit">Uploaded</button>
	</form>
	<?php
	if(!empty($_FILES)){
		
		copy($_FILES['fileUpload']['tmp_name'],"upload/".$_FILES['fileUpload']['name']);

		print_r($_FILES);
		echo "<br />";

		echo "Upload file Successfull!";
		echo "<br />";

		echo "file size : ".(($_FILES['fileUpload']['size']/1024)/1024)." GB";

	}
	?>
</body>
</html>