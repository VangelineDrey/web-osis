<?php
    
$vote1 = query("SELECT count(vote) FROM pemilu WHERE vote = 1")[0];
$vote2 = query("SELECT count(vote) FROM pemilu WHERE vote = 2")[0];
$vote3 = query("SELECT count(vote) FROM pemilu WHERE vote = 3")[0];

$satu= $vote1["count(vote)"];
$dua= $vote2["count(vote)"];
$tiga= $vote3["count(vote)"];
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<?php
    $url1=$_SERVER['REQUEST_URI'];
    header("Refresh: 60; URL=$url1");
?>
    <canvas id="myChart" style="width:100%;max-width:700px">
    <script>
    var xValues = ["Kenneth", "Sintia","Vinca"];
    var yValues = [<?=$satu;?>, <?=$dua;?>, <?=$tiga;?>];
    var barColors = ["red", "green","blue"];

    new Chart("myChart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
        backgroundColor: barColors,
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        title: {
        display: true,
        text: "Grafik Pemilihan"
        }
    }
    });
    </script>
    </canvas>