<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Travel</title>
</head>

<body>
    <div style=" display: flex;
  margin: 50px auto;
  width: 1400px;
  height: 800px;
  background-color: #f1f2f6;">
        <div style="width: 40%; margin-top: 50px;">
            <?php

            require_once "baseconnect.php";

            $query = mysqli_connect($hostname, $username, $password, $dbname);

            if (mysqli_connect_errno()) {
                echo "Error: Can't connect to database";
            }

            $result = mysqli_query($query, "SELECT * FROM users");

            while ($row = mysqli_fetch_array($result)) {
                echo "<div style='font-size: 32px; color: green; padding: 15px;'>Your Login: </div>" . $row['Login'] . "<br>" .
                    "<div style='font-size: 32px; color: red; padding: 15px;'>Your Password: </div>" . $row['Pass'] . "<br>" .
                    "<div style='font-size: 32px; color: blue; padding: 15px;'>Your Email: </div>" . $row['Email'];
            }

            mysqli_close($query);

            ?>
        </div>
        <div>
            <img src="img/travel.jfif" alt="slide-image" loading="lazy" style="height: 800px; max-width: 100%;" />
        </div>
    </div>

</body>

</html>