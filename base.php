<?php

require_once "baseconnect.php";

$conect = new mysqli($hostname, $username, $password, $dbname);

$login = $_POST['reg-Login'];
$password = $_POST['reg-pwd'];
$email = $_POST['reg-email'];

if ($conect->query("INSERT INTO users VALUES ('$login', '$password', '$email')")) {
    echo "<div style='font-size: 32px; padding: 50px; color: green;'>Register Sucessful</div>";
} else {
    echo "<div style='font-size: 32px; padding: 50px; color: red;'>Register Failed</div>";
}

?>

<div>
<a href='index.html' style='position: relative; bottom: -60px; color:white; margin-left: 10px; font-size: 24px; text-decoration: none; padding: 15px; border-radius: 12px; background-color: black;'>Back</a>
</div>
