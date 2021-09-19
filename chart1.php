<?php  
 $connectz = mysqli_connect("localhost", "root", "ieti19", "birthright_db");  
 //$query = "SELECT gender, count(*) as number FROM tbl_employee GROUP BY gender";  
 //$queryz = "SELECT Status, count(*) as number FROM birthright_db.masterlist GROUP By Status";
 $queryz = "SELECT verified, Status, count(*) as number FROM birthright_db.masterlist, birthright_db.login where verified='1' and user_id=Student_No GROUP By Status";
 $resultz = mysqli_query($connectz, $queryz);  
 ?>  

      <head>  
           <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>  
            
		   <script type="text/javascript" src="gstatic.js"></script> 
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['status', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($resultz))  
                          {  
                               echo "['".$row["Status"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of enrolled students',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head> 