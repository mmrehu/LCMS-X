<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['image'])) {
    // Get the base64 image data
    $imageData = $_POST['image'];

    // Remove the prefix 'data:image/png;base64,' from the image data
    $imageData = str_replace('data:image/png;base64,', '', $imageData);

    // Decode the base64 string
    $decodedImage = base64_decode($imageData);

    // Get the current directory where the script is located
  $uploadDir = realpath(__DIR__ . '/../admin/dashboard/images') . DIRECTORY_SEPARATOR;

 // This will give the path to the current directory
if (!file_exists($uploadDir)) {
        if (!mkdir($uploadDir, 0777, true) && !is_dir($uploadDir)) {
            die("Failed to create the 'images' directory.");
        }
    }
    // Specify the file path in the current directory
    $filePath = $uploadDir . '/photo_' . time() . '.png';

    // Save the image to the same directory as the PHP script
    if (file_put_contents($filePath, $decodedImage)) {
        echo "Image uploaded successfully: " . $filePath;
    } else {
        echo "Failed to upload image.";
    }
} else {
    echo "No image data received.";
}
?>
