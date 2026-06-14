<?php
if (isset($_POST['upload'])) {
    $namaFile = $_FILES['file_upload']['name'];
    $tmpFile = $_FILES['file_upload']['tmp_name'];
    $error = $_FILES['file_upload']['error'];

    if ($error === 0) {
        $folderTujuan = "uploads/";

        if (!is_dir($folderTujuan)) {
            mkdir($folderTujuan);
        }

        move_uploaded_file($tmpFile, $folderTujuan . $namaFile);

        echo "File berhasil diupload: " . $namaFile;
    } else {
        echo "Upload gagal. Kode error: " . $error;
    }
}
?>