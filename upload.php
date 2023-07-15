<?php
if ($_FILES['fileToUpload']['error'] == 0) {
    $fileName = $_FILES['fileToUpload']['name'];
    $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
    $fileSize = $_FILES['fileToUpload']['size'];

    $destinationPath = 'uploads/' . $fileName;

    if (move_uploaded_file($fileTmpName, $destinationPath)) {
        echo 'File uploaded successfully!';
    } else {
        echo 'File upload failed!';
    }
} else {
    echo 'There was an error uploading the file!';
}
?>
