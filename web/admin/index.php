<?php
header('Content-Type: text/html; charset=UTF-8');
?>

<script>
// Get screen width and height
let screenWidth = window.screen.width;
let screenHeight = window.screen.height;
let ratio = screenWidth + ":" + screenHeight;
let deviceType = "";

// Determine device type and redirect accordingly
if (screenWidth <= 768) {
    deviceType = "Mobile";
    window.location.href = "login/loginA.php"; // Change to your mobile site URL
} else if (screenWidth > 768 && screenWidth <= 1024) {
    deviceType = "Tablet";
    window.location.href = "login/loginT.php"; // Change to your tablet site URL
} else {
    deviceType = "Desktop";
    window.location.href = "login/loginD.php"; // Change to your desktop site URL
}
</script>
