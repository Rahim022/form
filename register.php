<?php
include 'register-query.php'; //اتصال به database
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <title>ثبت نام</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/project/css/bootstrap.min.css">
    <link rel="stylesheet" href="/project/css/register-login.css">
    <link rel="stylesheet" href="/project/css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
</head>

<body>
<div class="main-box">
    <div class="form-box">
        <div class="button-box">
            <div id="account-btn"></div>
            <a type="button" class="toggle-btn mr-3" href="login.php">ورود</a>
            <a type="button" class="toggle-btn mr-1" href="register.php">ثبت نام</a>
        </div>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="login" class="input-group">
            <input type="text" class="input-field" name="first_name" placeholder="نام"  >
            <input type="text" class="input-field" name="last_name" placeholder="نام خانوادگی">
            <input type="text" class="input-field" name="codemeli" placeholder="کدملی">
            <input type="text" class="input-field" name="phone" placeholder="شماره تلفن">
            <input type="password" class="input-field" name="password" placeholder="رمز عبور" >
            <input type="password" class="input-field" name="password-confirm" placeholder="تکرار رمز عبور">

            <br>
            <br>
            <br>

            <button type="submit"  class="submit-btn mt-3" name="register">ثبت نام</button>
        </form>


    </div>
</div>
<script src="/project/js/login-register.js"></script>

</body>
<script src="/project/js/jquery.min.js"></script>
<script src="/project/js/popper.min.js"></script>
<script src="/project/js/js/bootstrap.min.js"></script>
</html>