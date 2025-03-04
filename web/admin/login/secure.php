<?php
session_start();


$username = 'mmrehu';
$password = 'mmrehu';


if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}
if ($_SESSION['login_attempts'] >= 3) {
    echo "<script>alert('Click okay to get script password'); window.location.href='https://www.instagram.com/_.mmrehu/';</script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $useremail = $_POST['useremail'] ?? '';
    $userpass = $_POST['password'] ?? '';
    
    if ($useremail === $username && $userpass === $password) {
        $_SESSION['user'] = $useremail;
        $_SESSION['login_attempts'] = 0; // Reset attempts
       header("Location: /web/admin/dashboard/main.php");
exit(); // Always exit after header()

    } else {
        $_SESSION['login_attempts']++;
        echo "<script>alert('Invalid username or password.'); window.location.href='/admin/index.php';</script>";
    }
}
?>
