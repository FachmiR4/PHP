<?php
include "connection.php";
session_start();

if(isset($_POST["submit"])){
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = hash("sha256", $_POST['password']);

    $sql = "select * from petugas_perpus where   username = '$username' and 
    password = '$password'";
    $exec = mysqli_query($conn,$sql);
    if($exec -> num_rows > 0){
        $row = mysqli_fetch_assoc($exec);
        $_SESSION['username'] = $row['username'];
        header("Location: halaman_menu.php?Loginsukses");
        exit();
    } else{
        echo "<script>alert('Username atau password Anda salah. Silakan coba lagi!')</script>";
    }
}

?>
<html>
    <head>
    </head>
    <body>
        <div class="">
        <form action="" method="POST">
            <label for="">Username</label>
            <input type="text" id="username" name="username" require>
            <label for="">Password</label>
            <input type="password" id="password" name="password" require>
            <input type="submit" value="submit" name="submit">
        </form>
        </div>
    </body>
</html>