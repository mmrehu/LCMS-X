<?php
if (isset($_POST['image'])) {
    $image = $_POST['image'];
    $filePath = "images/" . $image;

    if (file_exists($filePath)) {
        unlink($filePath);
        echo "Image deleted successfully!";
    } else {
        echo "File not found!";
    }
}
?>
