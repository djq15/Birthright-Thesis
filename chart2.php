<?php  
 $connectz = mysqli_connect("localhost", "root", "ieti19", "birthright_db");  
 //$queryz = "SELECT Gender, count(*) as gender FROM birthright_db.masterlist GROUP By Gender ORDER BY Gender DESC";
 $queryz = "SELECT verified, Gender, count(*) as gender FROM birthright_db.masterlist, birthright_db.login where verified='1' and user_id=Student_No GROUP By Gender ORDER BY Gender DESC";
 
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
                          ['Gender', 'gender'],  
                          <?php  
                          while($row = mysqli_fetch_array($resultz))  
                          {  
                               echo "['".$row["Gender"]."', ".$row["gender"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of gender',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head> 