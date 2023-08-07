<?php
require './dbconnect.php';
require './header.php';
try{
    $state = $conn->prepare("select chart_name, count from chart1");
    $state->execute();
    $result = $state->fetchAll(PDO::FETCH_ASSOC);

}catch(PDOException $e){
    echo $e->getMessage();
}
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            
          ['Chart Name', 'Count'],
            <?php 
                foreach($result as $item){
                    echo "[ '".$item['chart_name']."', ".$item['count']."],";
                }
            ?>
        ]);

        var options = {
          title: 'My Daily Product Selles'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  </body>
</html>




<?php require './footer.php' ?>