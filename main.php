<?php

require_once "baseconnect.php";

$query =mysqli_connect($hostname, $username, $password, $dbname);

if (mysqli_connect_errno())

{echo "Error: Can't connect to database";}

$result = mysqli_query($query,"SELECT * FROM users");

while($row = mysqli_fetch_array($result))

{echo "<span style='font-size: 32px; color: green;'>Your Login: </span>" . $row['Login'] . "<br>" . "<span style='font-size: 32px; color: red;'>Your Password: </span>" . $row['Pass'] . "<br>" . "<span style='font-size: 32px; color: blue;'>Your Email: </span>" . $row['Email']; echo "<br>"; }

mysqli_close($query);
