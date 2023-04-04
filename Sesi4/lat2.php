<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_POST["txUSER"])){
    $usr = $_POST["txUSER"];
    if($usr==""){
        echo "<div><h3 style='color:red;padding:6px;'>username/password salah</h3></div>";
    }

}


if(isset($_POST["txPASKEY"])){
    $pwd = $_POST["txPASKEY"];
    if($pwd==""){
        echo "<div><h3 style='color:red;padding:6px;'>username/password salah</h3></div>";
    }

}

?>

    <form action="lat2.php"method="POST">
    <div>
        username
        <input type="text" id="txUSER" name="txUSER">
    </div>

        <div>
        password
        <input type="password" id="txPASKEY" name="txPASKEY">
        </div>

    <div>
        <button type="submit"> Login </button>
        <a href="daftar.php"> Daftar </a>
    </div>    
</body>
</html>
