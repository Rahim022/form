<?php
 
 session_start();
 
 require_once 'database.php';

if(ISSET($_POST['login'])){
    if($_POST['phone'] != "" || $_POST['codemeli'] != ""){
        $phone = $_POST['phone'];
        $codemeli = $_POST['codemeli'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM `users` WHERE `phone`=? AND `codemeli`=? AND `password`=? ";
        $query = $conn->prepare($sql);
        $query->execute(array($phone,$codemeli,$password));
        $row = $query->rowCount();
        $fetch = $query->fetch();
        if($row > 0) {
            $_SESSION['phone'] = $fetch['phone'];
            header("location: dashboard.php");
        } else{
            echo "
            <script>alert('Invalid codemeli or password')</script>
            <script>window.location = 'index.php'</script>
            ";
        }
    }else{
        echo "
            <script>alert('Please complete the required field!')</script>
            <script>window.location = 'index.php'</script>
        ";
    }
}
?>