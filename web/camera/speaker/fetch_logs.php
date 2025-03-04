<?php
$logfile = realpath(__DIR__ . '/logs.txt');

$logs = file($logfile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$ipData = [];

foreach ($logs as $log) {
    preg_match('/IP: ([^|]+)/', $log, $ip);
    preg_match('/OS: ([^|]+)/', $log, $os);
    preg_match('/Browser: ([^|]+)/', $log, $browser);
    preg_match('/Status: ([^|]+)/', $log, $status);
    preg_match('/Time: (.*?)\]/', $log, $time);
    
    if (!empty($ip[1])) {
        $ipAddress = trim($ip[1]);
        $ipData[$ipAddress] = [
            'IP' => $ipAddress,
            'OS' => trim($os[1] ?? 'Unknown'),
            'Browser' => trim($browser[1] ?? 'Unknown'),
            'Status' => trim($status[1] ?? 'Offline'),
            'Time' => trim($time[1] ?? 'Unknown')
        ];
    }
}

$uniqueIPs = count($ipData);

echo "<script>document.getElementById('uniqueIPs').innerText = '$uniqueIPs';</script>";

foreach ($ipData as $data) {
    echo "<tr>
            <td>".htmlspecialchars($data['IP'])."</td>
            <td>".htmlspecialchars($data['OS'])."</td>
            <td>".htmlspecialchars($data['Browser'])."</td>
            <td>".htmlspecialchars($data['Time'])."</td>
            <td class='".strtolower($data['Status'])."'>".htmlspecialchars($data['Status'])."</td>
          </tr>";
}
?>
