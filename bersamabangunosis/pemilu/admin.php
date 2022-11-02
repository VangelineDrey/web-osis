<?php
	require '../admin/functions.php';
    
$mysqli = new mysqli("localhost","root","","oska");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
    echo "hello";
}


if($insert){
//know total inserted records using mysqli_affected_rows
print'Successfully inserted and Total '.$mysqli->affected_rows .' rows added.';
}else{
echo"Error: (".$mysqli->errno .") ".$mysqli->error;
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilu 2022</title>
</head>
<body>
    
</body>
</html>