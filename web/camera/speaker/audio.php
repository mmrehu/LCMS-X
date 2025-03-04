<?php
// Directory where audio files are stored
$audioDir = "audios/";

// Scan for audio files with multiple extensions
$files = glob($audioDir . "*.{mp3,wav,ogg,aac,flac,m4a}", GLOB_BRACE);

if (!empty($files)) {
    // Sort files by modification time (latest first)
    usort($files, function ($a, $b) {
        return filemtime($b) - filemtime($a);
    });

    // Correct MIME type header for audio
    header("Content-Type: text/plain");

    // Return the latest audio file
    echo $files[0];
} else {
    echo "";
}
?>
