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
    $vote1 = query("SELECT count(vote) FROM pemilu WHERE vote = 1")[0];
    $vote2 = query("SELECT count(vote) FROM pemilu WHERE vote = 2")[0];
    $vote3 = query("SELECT count(vote) FROM pemilu WHERE vote = 3")[0];

    echo "<div> Vote 1: " . $vote1["count(vote)"]. "</div>";
    echo "<div> Vote 2: " . $vote2["count(vote)"] . "</div>";
    echo "<div> Vote 3: " . $vote3["count(vote)"] . "</div>";
    
?>