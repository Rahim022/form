<?php
include 'install.php';
$host = 'localhost'; 
$user='user1';
$userName = 'root';   
$pass = ""; 
if ($_SERVER["REQUEST_METHOD"] == "POST"){  //اگر چیزی به اسم رجیستر با متد پست فرستاده شده بود
    
    $first = test_input($_POST['first_name']);   ///این پوت نیم رو که با پست فرستاده شده رو میریزیم داخل متغییرموردنظر
    $last = test_input($_POST['last_name']);
    $codemeli = test_input($_POST['codemeli']);
    $phone = test_input($_POST['phone']);
    $password = test_input(md5($_POST['password']));  //هش کردن
    $password_confirm = test_input(md5($_POST['password-confirm']));
    if (empty ($_POST["first_name"])) {
        $errMsg = "<div class='alert alert-danger my-3'>نام خود را وارد نکردید</div>";
                 echo $errMsg;
    } else {
        $last = $_POST["first_name"];
    }

    if (empty ($_POST["last_name"])) {
        $errMsg = "<div class='alert alert-danger my-3'>نام خانوادگی خود را وارد نکردید</div>";
                 echo $errMsg;
    } else {
        $last = $_POST["last_name"];
    }

    if (empty ($_POST["codemeli"])) {
        $errMsg = "<div class='alert alert-danger my-3'>کد ملی را وارد نکردید</div>";
                 echo $errMsg;
    } else {
        $codemeli = $_POST["codemeli"];
    }

    if (empty ($_POST["phone"])) {
        $errMsg = "<div class='alert alert-danger my-3'>شماره تلفن را وارد نکردید</div>";
                 echo $errMsg;
    } else {
        $phone = $_POST["phone"];
    }

    if (empty ($_POST["password"])) {
        $errMsg = "<div class='alert alert-danger my-3'>رمز عبور را وارد نکردید</div>";
                 echo $errMsg;
    } else {
        $password = $_POST["password"];
    }

    if (empty ($_POST["password-confirm"])) {
        $errMsg = "<div class='alert alert-danger my-3'>تکرار رمز عبور را وارد نکردید</div>";
                 echo $errMsg;
    } else {
        $password_confirm = $_POST["password-confirm"];
    }

    if(preg_match('/^(?:98|\+98|0098|0)?9[0-9]{9}$/', $phone)) {
        $phone = $_POST["phone"];
     }else{
        echo "<div class='alert alert-danger my-3'>شماره تلفن معتبر نیست</div>";
     }

     if (!preg_match('/^[^\x{600}-\x{6FF}]{2,16}+$/u', str_replace("\\\\", "", $first))) {
        $first = $_POST["first_name"];
       } else {
        echo "<div class='alert alert-danger my-3'>لطفا نام خود را فارسی وارد کنید !</div>";
       }

       if(preg_match('/^[0-9]{10}$/',$codemeli)) {
        $codemeli = $_POST["codemeli"];
     }else{
        echo "<div class='alert alert-danger my-3'>کد ملی معتبر نیست</div>";
     }

     if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$/',$password)) {
        $password = $_POST["password"];
        $password_confirm = $_POST["password-confirm"];
     }else{
        echo "<div class='alert alert-danger my-3'>رمز عبور باید ترکیبی از حروف کوچک و بزرگ واعداد انگلیسی باشد و هشت رقمی باشد </div>";
     } 
     
     if (!preg_match('/^[^\x{600}-\x{6FF}]{2,16}+$/u', str_replace("\\\\", "", $last))) {
        $last = $_POST["last_name"];
       } else {
        echo "<div class='alert alert-danger my-3'>لطفا نام خانوادگی خود را فارسی وارد کنید !</div>";
       }
}
 
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(ISSET($_POST['register'])){
    try{
        $conn =new PDO("mysql:host=$host",$userName,$pass);  
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `users` (`first_name`, `last_name`, `codemeli`, `phone`,`password`) VALUES ('$first', '$last', '$codemeli', '$phone','$password')";
        $conn->exec($sql);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
    $conn = null;
?>