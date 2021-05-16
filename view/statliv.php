<?php


$connect = mysqli_connect("localhost", "root", "", "web");  
$query = "SELECT Zone, count(*) as number FROM livreur GROUP BY Zone";  
$result = mysqli_query($connect, $query);  


?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Liste Evenement</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <!-- My Css Class-->

	<link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="../css/assyl.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" /> 
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>  
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Zone', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Zone"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'pourcentages des livreurs par region',  
                      //is3D:true,  
                      pieHole: 1  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  

       
<body class="sb-nav-fixed">
    <!-- header -->
    <?php include_once 'header.php'; ?>
     <!-- Contient -->
    <body>
	<div class="limiter">
            
		   <div class="centrer" >
           
           
            <div style="width:900px;">  
                <h3 align="center">Statistique</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
                  </div>  
            
           
 




            
        <br />
        
        <br />
        
        <br />
        <br />
        <br />




  </div>
    


              <!-- footer -->
              <?php include_once 'footer.php'; ?>       
    </body>
</html>