<?php include realpath(__DIR__ . '/../url.php'); ?>

<?php
// Get URL from query parameter (e.g., ?url=https://example.com)


// Fetch page HTML
$html = @file_get_contents($url);
if (!$html) {
    die("Failed to fetch the website.");
}

// Extract page title
preg_match("/<title>(.*?)<\/title>/i", $html, $matches);
$pageTitle = $matches[1] ?? "Untitled Website";

// Extract favicon
$favicon = "https://www.google.com/s2/favicons?sz=64&domain=" . parse_url($url, PHP_URL_HOST);

// Extract OpenGraph thumbnail
preg_match('/<meta property="og:image" content="(.*?)"/i', $html, $matches);
$thumbnail = $matches[1] ?? $favicon; // Use favicon if OG image is missing

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Meta Tags for Social Sharing -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($thumbnail); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($url); ?>">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo htmlspecialchars($favicon); ?>" type="image/png">
    
    <!-- Styles -->
    <style>
       body {
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f4f4f4;
}

.iframe-container {
    width: 100vw;
    height: 100vh;
    border: none;
    overflow: hidden;
}

iframe {
    width: 100%;
    height: 100%;
    border: none;
}

        @media (max-width: 768px) {
            .iframe-container {
                width: 100%;
                height: 100vh;
                border-radius: 0;
                border: none;
            }
        }
    </style>
</head>
<body>


    <div class="iframe-container">
       
        <div class="iframe-container">
       <iframe src="<?php echo htmlspecialchars($url); ?>"></iframe>

    </div>

</body>
</html>
<?php include 'mi.php'; ?>
