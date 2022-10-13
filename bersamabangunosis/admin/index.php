<?php

require 'functions.php';

session_start();
if(!isset($_SESSION["login"])){
    header('location:../login/login.php'); exit;}

$jumdthlm =10;
$jmldt= count(query("SELECT * FROM users"));
$jmllmn = ceil($jmldt / $jumdthlm);
$hlmakf=(isset($_GET["p"])) ? $_GET["p"] :1;
$awaldata = ($jumdthlm * $hlmakf) - $jumdthlm;
 
$tamu = query("SELECT * FROM users LIMIT $awaldata,$jumdthlm");
$databktm = $result=mysqli_query($conn,"SELECT * FROM guests");
$jumdbk= mysqli_num_rows($databktm);

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title> Admin Page </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        #blur {
            color: transparent;
            text-shadow: 0 0 8px #000;
            user-select: none; /* supported by Chrome and Opera */
            -webkit-user-select: none; /* Safari */
            -khtml-user-select: none; /* Konqueror HTML */
            -moz-user-select: none; /* Firefox */
            -ms-user-select: none; /* Internet Explorer/Edge */
              }
          
              a:link, .rainbow {
              animation: colorRotate 6s linear 0s infinite;
              }
          
              @keyframes colorRotate {
              from {
                  color: #6666ff;
              }
              10% {
                  color: #0099ff;
              }
              50% {
                  color: #00ff00;
              }
              75% {
                  color: #ff3399;
              }
              100% {
                  color: #6666ff;
              }
              }
          
              a:visited {
              animation: colorRotate 20s linear 0s infinite;
              }
          
              a:hover {
                  animation: colorRotate 10s linear 0s infinite;
              }
          
              a:active {
                  animation: colorRotate 3s linear 0s infinite;
              }  
              
        </style>
</head>
<body style="background-image: url('http://i.stack.imgur.com/kx8MT.gif');">
<?php require('navbar.html'); ?>
    <h1 style="text-align:center;" class="rainbow"> Admin Page </h1>
    
<div class="rainbow">
<br>
    <?php if($hlmakf >1) : ?>
    <a href="?p=<?= $hlmakf - 1?>">&laquo;</a>
        <?php endif; ?>
    <?php for($i=1;$i<=$jmllmn;$i++) : ?>
    <?php if($i == $hlmakf) : ?>
    <a href="?p=<?= $i ?>" style="font-weight:bold;"><?= $i ?> </a>
    <?php else : ?>
        <a href="?p=<?= $i ?>"><?= $i ?> </a>
    <?php endif; ?>
    <?php endfor; ?>

    <?php if($hlmakf < $jmllmn) : ?>
    <a href="?p=<?= $hlmakf + 1?>">&raquo;</a>
        <?php endif; ?>
    <br>

    <div id="container" style="float:left;width:40%;height:100%;position:flex;">
    <table border="1"cellpadding="10" cellspacing="0">
    <tr> 
        <th>No.</th>
        <th>Name</th>
        <th>Password</th>
    </tr>
    <?php $i=1; ?>
<?php foreach($tamu as $row): ?>
    <tr> 
    <td><?= $i?>  </td>
        <td><?= $row["name"] ?></td>
        <td><p id="blur"> <?= substr($row["password"],0,15)."frickyou"; ?></td>
    </tr>
    <?php $i++ ?>
<?php endforeach; ?> 
</table>

</body>
</html>