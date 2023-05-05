<?php
include 'database.php';
include 'login-query.php'; //اتصال به database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود و ثبت نام</title>
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="/project/css/bootstrap.min.css">
    <link rel="stylesheet" href="/project/css/register-login.css">
    <link rel="stylesheet" href="/project/css/style.css">

</head>

<body>
    <div class="main-box">
        <div class="form-box"> 
            <div class="button-box">    
                <div id="account-btn"></div>
                <a type="button" class="toggle-btn" href="register.php">ثبت نام</a>
                <a type="button" class="toggle-btn" href="login.php">ورود</a>
            </div>
            
            <form method="post" action="login.php" id="login" class="input-group">
                <input type="text" class="input-field" name="phone" placeholder=" شماره تلفن" require>
                <input type="text" class="input-field" name="codemeli" placeholder=" کد ملی " require>
                <input type="password" class="input-field" name="password" placeholder="رمز عبور" require>
                <br>
                <br>
                <br>
                <button type="submit" class="submit-btn" name="login">ورود</button>

            </form>

        </div>

    </div>
    <script src="/project/js/login-register.js"></script>
</body>

</html>