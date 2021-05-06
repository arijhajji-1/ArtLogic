<?php
 
 $dbhandle = new mysqli('localhost','root','','web');
 echo $dbhandle->connect_error;
 
 $query = "SELECT TitreEvenement, sum(DureeEvenement) FROM evenement group by TitreEvenement";
 $res = $dbhandle->query($query);
 
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['TitreEvenement', 'DureeEvenement'],
          <?php
          while($row=$res->fetch_assoc())
          {
              echo "['".$row['TitreEvenement']."',".$row['sum(DureeEvenement)']."],";
          }
          ?>
        ]);

        var options = {
          title: 'Duree par Events'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
