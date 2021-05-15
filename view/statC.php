<?php

$con = mysqli_connect("localhost","root","","web");  
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['id utilisateur', 'prix total'],
         <?php
         $sql = "SELECT * FROM commande";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['id_utilisateur']."',".$result['prix_total']."],";          }

         ?>
        ]);

        var options = {
          title: 'chaque commande par rapport a l ID en DT'
        };

        var chart = new google.visualization.BarChart(document.getElementById('barchart_values'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="barchart_values" style="width: 900px; height: 550px;"></div>
    <button type="submit" class="btn btn-success" style="width: 200px;" onclick="location.href='Bcommande.php'">la liste des commands</button>
  </body>
</html>
