<?php
	require '../admin/functions.php';
    
$mysqli = new mysqli("localhost","root","","oska");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
}

// $query = "SELECT count(vote) FROM pemilu";      
// $numrows = query($query);
// echo $numrows[0];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilu 2022</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){    
          loadstation();
      });

      function loadstation(){
          $("#station_data").load("station.php");
          setTimeout(loadstation, 2000);
      }
    </script>
</head>
<body>
  <div id = "station_data">
  </div>
<?php include "graph.php";?>
</body>
</html>