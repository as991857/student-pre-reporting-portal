<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
    <style>
         ul{
            padding: 15px;
            overflow: auto;
            background-color: blue;
            
            height: 300px;

        }
        li{
            text-align: center;
            display: block;
            border: 2px solid red;

        }
        li a{
            text-decoration: none;
            padding: 8px 16px;
            color: white;

        }
        li a:active{
            background-color: green;
        }
        li a:hover{
            background-color: grey;
            color: white;
        }
    </style>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Students', 'status'],
          ['Approved',      <?php 
                        $con=mysqli_connect('localhost','root','','project');
                        $query="select * from anil where status='Y'";
                        $result=mysqli_query($con,$query);
                        $res=mysqli_num_rows($result);
                        echo $res;
                        
                        ?>],
          ['Not Approved',       <?php 
                        $con=mysqli_connect('localhost','root','','project');
                        $query="select * from anil where status='N'";
                        $result=mysqli_query($con,$query);
                        $res=mysqli_num_rows($result);
                        echo $res;
                        
                        ?>],
         
        ]);

        var options = {
          title: 'Students Details',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  
    
  
  


</head>
<body>
    <?php
    include("header.php");
    ?>
    <div class="row bg-success">
        <div class="col-sm-3">
            <?php  include ("navbar.php");?>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-3">
                    <div class="well" style="background-color:aqua;text-align:center;">
                        <h3>Registered</h3>
                        <?php 
                        $con=mysqli_connect('localhost','root','','project');
                        $query="select * from anil_reg";
                        $result=mysqli_query($con,$query);
                        $res=mysqli_num_rows($result);
                        echo $res;
                        
                        ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="well" style="background-color:green;text-align:center;">
                        <h3>Approved</h3>
                        <?php 
                        $con=mysqli_connect('localhost','root','','project');
                        $query="select * from anil where status='Y'";
                        $result=mysqli_query($con,$query);
                        $res=mysqli_num_rows($result);
                        echo $res;
                        
                        ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="well" style="background-color:orangered;text-align:center;">
                        <h3>Not Approved</h3>
                        <?php 
                        $con=mysqli_connect('localhost','root','','project');
                        $query="select * from anil where status='N'";
                        $result=mysqli_query($con,$query);
                        $res=mysqli_num_rows($result);
                        echo $res;
                        
                        ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="well" style="background-color:brown;text-align:center;">
                        <h3>Reported</h3>
                        <?php 
                        $con=mysqli_connect('localhost','root','','project');
                        $query="select * from anil";
                        $result=mysqli_query($con,$query);
                        $res=mysqli_num_rows($result);
                        echo $res;
                        
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
         <div class="col-sm-6">
            <div class="well" style="border:10px solid gray;"><div id="piechart_3d" style="width: 100%; height: 200px;"></div></div>
         </div>
         <div class="col-sm-6"style="border:10px solid gray;"><div id="columnchart_material" style="width: 100%; height: 200px;"></div></div>
        </div>  <!-- 9 k niche wala row -->
        </div>   <!-- col-sm-9 close -->
        
    </div>
    <div class="container-fluid ">
        <div class="row" >
            <div class="col-sm-12" >
            <table style="margin-top:20px;color:black;" class="table table-stripped">
            <h2 style="text-align:center; color:red; background-color:black;">Students Details</h2>
            <hr>
                
                    <tr>
                    
                        <th>Name</th>
                        <th>College</th>
                        <th>Email</th>
                        <th>Mobile</th>
                    </tr>
                
                
                    <tr>
                    <?php
                    $con = mysqli_connect('localhost','root','','project');
                    $query = "select * from anil_reg";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['college'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['mobile'];?></td>
                    </tr>
                    <?php
                    };
                    
                ?>

                
            </table>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Register', 'Approved', 'Not-approved'],          
          ['2023', <?php 
                        $con=mysqli_connect('localhost','root','','project');
                        $query="select * from anil_reg";
                        $result=mysqli_query($con,$query);
                        $res=mysqli_num_rows($result);
                        echo $res;
                        
                        ?>, <?php 
                        $con=mysqli_connect('localhost','root','','project');
                        $query="select * from anil where status='Y'";
                        $result=mysqli_query($con,$query);
                        $res=mysqli_num_rows($result);
                        echo $res;
                        
                        ?>, <?php 
                        $con=mysqli_connect('localhost','root','','project');
                        $query="select * from anil where status='N'";
                        $result=mysqli_query($con,$query);
                        $res=mysqli_num_rows($result);
                        echo $res;
                        
                        ?>]
        ]);

        var options = {
          chart: {
            title: 'report',
            
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</html>