<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Upload Videos</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Videos</h2>
  </div>
	 
   <form action="" method='post' enctype="multipart/form-data">
Description of Video: <input type="text" name="description_entered"/><br><br>
<input type="file" name="file"/><br><br>
	<button type="submit" class="btn" name="upload_submit">Upload</button>
 
</form>
</body>
</html>