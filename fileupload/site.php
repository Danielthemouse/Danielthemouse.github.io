<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<title>File Uploader</title>

<h1><p><u>File Uploader</u></p></h1> </br>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <b>Select a file to upload:</b></br>
    <input class="btn" type="file" name="fileToUpload" id="fileToUpload"><br><br>
    <input class="btn" type="submit" value="Upload File" name="submit">
</form>

</body>
</html>