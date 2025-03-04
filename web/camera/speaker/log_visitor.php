<?php
// Get visitor details from JSON input
$data = json_decode(file_get_contents("php://input"), true);
$userAgent = $data["userAgent"] ?? "Unknown";
$platform = $data["platform"] ?? "Unknown";
$language = $data["language"] ?? "Unknown";
$screenSize = $data["screenSize"] ?? "Unknown";
$status = $data["status"] ?? "Unknown";

// Get IP Address
$ip = $_SERVER["REMOTE_ADDR"] ?? "Unknown";

// Get Browser Info
function getBrowser($userAgent) {
    if (strpos($userAgent, 'Firefox') !== false) return 'Firefox';
    elseif (strpos($userAgent, 'Chrome') !== false) return 'Chrome';
    elseif (strpos($userAgent, 'Safari') !== false) return 'Safari';
    elseif (strpos($userAgent, 'Edge') !== false) return 'Edge';
    elseif (strpos($userAgent, 'MSIE') !== false || strpos($userAgent, 'Trident/') !== false) return 'Internet Explorer';
    else return 'Unknown Browser';
}

// Get OS Info
function getOS($userAgent) {
    if (strpos($userAgent, 'Windows') !== false) return 'Windows';
    elseif (strpos($userAgent, 'Macintosh') !== false) return 'Mac';
    elseif (strpos($userAgent, 'Linux') !== false) return 'Linux';
    elseif (strpos($userAgent, 'Android') !== false) return 'Android';
    elseif (strpos($userAgent, 'iPhone') !== false || strpos($userAgent, 'iPad') !== false) return 'iOS';
    else return 'Unknown OS';
}

$browser = getBrowser($userAgent);
$os = getOS($userAgent);
$time = date("Y-m-d H:i:s");

// Log Data
$logEntry = "[Time: $time] IP: $ip | OS: $os | Browser: $browser | Screen: $screenSize | Lang: $language | Status: $status | User-Agent: $userAgent\n";

// Save to logs.txt
file_put_contents("logs.txt", $logEntry, FILE_APPEND | LOCK_EX);

// Save the latest status in status.txt
file_put_contents("status.txt", "User ($ip) is now: $status\n");
?>
