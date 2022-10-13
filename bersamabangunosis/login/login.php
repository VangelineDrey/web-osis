<?php
session_start();
require 'functions.php';
if(isset($_COOKIE['id']) && isset($_COOKIE["key"])){
 $id = $_COOKIE["id"];
 $key =$_COOKIE["key"];
 
 $result = mysqli_query($conn,"SELECT name FROM users WHERE id=$id");
 $row = mysqli_fetch_assoc($result);

 if($key === hash('sha256', $row['name'])){
     $_SESSION['login'] =true;
     $_SESSION['id'] = $row['id'];
 }
}

if(isset($_SESSION["login"])){
    header('location:../admin/index.php');
    exit;
}
    if(isset($_POST["login"])){

        $name=$_POST["name"];
        $password=$_POST["password"];

        $result = mysqli_query($conn,"SELECT * FROM users WHERE name='$name'");
        
        if(mysqli_num_rows($result)===1){
        
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password,$row["password"])) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];

                if(isset($_POST['remember'])){
                    setcookie('tebakiniapa',$row["id"], time() + 36000); 
                    setcookie('tebakiniapa2', hash('sha256',$row["name"]), time() + 36000); 
                }
                header("location:../admin/index.php");
                exit;
            }
        }
        $error=true;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <h1 contenteditable spellcheck="false" style="width:20%;height:20%;font-size:50px">Halaman Login</h1>
<?php if(isset($error)) : ?>
    <script>
        alert('name atau password salah');
        </script>
<?php endif; ?>

    <form action="" method="POST">
    <div style="box-shadow: rgba(0, 184, 255, 0.4) -5px 5px, rgba(0, 184, 255, 0.3) -10px 10px, rgba(0, 184, 255, 0.2) -15px 15px, 
    rgba(0, 184, 255, 0.1) -20px 20px, rgba(0, 184, 255, 0.05) -25px 25px; margin:20px; padding:10px;"> 
        <table>
            <tr><td>
        <label for="name">name </label></td><td> : </td><td>
        <input type="text" name="name" id="name"></td></tr>
        <tr><td>
         <label for="password">Password </label></td><td> : </td><td>
        <input type="password" name="password" id="password"></td>
        <tr><td colspan="3">
         <input type="checkbox" name="remember" id="rmbr">
        <label for="rmbr" name = "remember">remember me  |  <a href="registrasi.php">Register?</a> </label></td>
        <tr><td colspan="3">
         <button class="glow-on-hover text1" type="submit" name="login"
         style="margin-top:10px;">Submit</button></td>
    </div>

    </form>

    </body>
</html>