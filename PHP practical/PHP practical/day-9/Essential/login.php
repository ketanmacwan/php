<?php

session_start();

if(isset($_POST['btn_submit'])){
    $username = $_POST['txtUser'];
    $password = $_POST['txtPass'];
    if($username == "admin" && $password == "admin"){
        $_SESSION['username'] = $username;
        $_SESSION['time'] = time()+(1*60);
        header('location: home.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Username: <input type="text" name="txtUser"/><br>
        Password: <input type="password" name="txtPass" /><br>
        <button type="submit" name="btn_submit">LOGIN</button>
    </form>
</body>
</html>