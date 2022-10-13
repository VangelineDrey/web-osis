<?php
require 'functions.php';

    if(isset($_POST["register"])){

        if(registrasi($_POST)>0){
            echo "<script>alert('user baru berhasil ditambahkan!');
            </script>";
            header('location:login.php');exit;
        } else {
            echo mysqli_error($conn);
        }
        
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Registrasi</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
    <h1 contenteditable spellcheck="false" style="width:20%;height:20%;font-size:45px">Halaman Register</h1>

    <form action="" method="POST">
    <div style="box-shadow: rgba(0, 184, 255, 0.4) -5px 5px, rgba(0, 184, 255, 0.3) -10px 10px, rgba(0, 184, 255, 0.2) -15px 15px, 
    rgba(0, 184, 255, 0.1) -20px 20px, rgba(0, 184, 255, 0.05) -25px 25px; margin:20px; padding:10px;"> 
        <table>
            <tr><td>
        <label for="name">Nama </label></td><td>
        <input type="text" name="name" id="name"></td></tr>
        <tr><td>
         <label for="password">Password </label></td><td>
        <input type="password" name="password" id="password"></td>
        <tr>
        <tr><td>
         <label for="password2">Konfirmasi Password </label></td><td>
        <input type="password" name="password2" id="password2"></td></tr>
        <tr>
        <td colspan="2"><label><a href="login.php">Already have an account?</a></label></td>
        </tr>
        <tr><td colspan="2">
         <button class="glow-on-hover text1" type="submit" name="register"
         style="margin-top:10px;">Submit</button></td>
    </div>

    </form>

    </body>
</html>