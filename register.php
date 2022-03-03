<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <title>Register</title>
</head>

<body>

    <div class="post" style=" display: flex;
  margin: 50px auto;
  width: 1400px;
  height: 800px;
  background-color: #f1f2f6;">
        <div class="content" style="width: 40%; margin-top: 50px;">
            <form class="formularz" action="/base.php" method="post">
                <label for="Register" style="font-size: 42px; font-weight:600;margin-left: 150px;">Register:</label><br /><br /><br /><br />
                <label for="Login" style="font-size: 24px; text-shadow: 2px 1px 3px black; margin-left: 50px;">Login:</label><br /><br />
                <input type="text" id="reg-Login" required name="reg-Login" minlength="3" maxlength="20" style="font-size: 24px; margin-left: 50px;  border-radius: 12px;  border: none;" /><br /><br />
                <label for="Mail" style="font-size: 24px; text-shadow: 2px 1px 3px black; margin-left: 50px;">E-mail:</label><br /><br />
                <input type="email" id="reg-email" required name="reg-email" minlength="8" maxlength="40" style="font-size: 24px; margin-left: 50px;  border-radius: 12px;  border: none;" /> <br /><br />
                <label for="pwd" style="font-size: 24px; text-shadow: 2px 1px 3px black; margin-left: 50px;">Password:</label><br /><br />
                <input type="password" id="reg-pwd" required name="reg-pwd" minlength="8" maxlength="20" style="font-size: 24px; text-shadow: 2px 1px 3px black; margin-left: 50px; border-radius: 12px; border: none;" /><br /><br />
                <label for="pwd" style="font-size: 24px; text-shadow: 2px 1px 3px black; margin-left: 50px;">I accept the privacy terms:</label>
                <input type="checkbox" id="checkbox" required name="checkbox" style="width: 20px; height: 20px; position:relative;bottom: -3px;">
                <div class="g-recaptcha" required data-sitekey="6Lc1t6weAAAAAGQOJYMe84sH9p2lh5o2z17SD8nR" style="padding: 50px;"></div>
                <input class="reg-button" type="submit" value="Register" style="font-size: 24px;margin-left: 180px;padding: 10px; background-color: blue; border:none;
            border-radius: 12px; box-shadow: 3px 1px 3px black; color:white;" />
            </form>
            <a href='index.html' style='position: relative; bottom: -60px; color:white; margin-left: 10px; font-size: 24px; text-decoration: none; padding: 15px; border-radius: 12px; background-color: black;'>Back</a>
        </div>
        <div class="slide">
            <img class="slide-img" src="img/travel.jfif" alt="slide-image" loading="lazy" style="height: 800px; max-width: 100%;" />
        </div>
    </div>
</body>

</html>
