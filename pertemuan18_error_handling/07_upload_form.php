<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
    <h2>Form Upload File</h2>

    <form action="07_upload_proses.php" method="post" enctype="multipart/form-data">
        <label>Pilih file:</label>
        <input type="file" name="file_upload">
        <button type="submit" name="upload">Upload</button>
    </form>
</body>
</html>