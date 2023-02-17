<?php
session_start();
if($_SESSION["user"]=="" && ($_SESSION["user"]==0))
{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .header{
            position: fixed;
            text-align: center;
            width: 100%;
        }
        .header .container-fluid {
            background-color: #f1f1f1;
            
        }
        img {
            height: 100px;
            width: 150px;
        }
        ul{
            padding: 15px;
            overflow: auto;
            background-color: blue;
            margin-top: 110px;
            height: 400px;

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
</head>
<body>
    
    <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="image/spi_logo.png">
                    </div>
                    <div class="col-sm-4">
                        <h2>Softpro Learning Center</h2>
                        <h4 style="color:orangered;">A Unit Of Softpro Group Of Companies</h4>
                    </div>
                    <div class="col-sm-4 pt-5">
                        <button onclick="location.href='http://localhost/project/login.php'" style="background-color:orangered;">Admin Login</button>
                    </div>
                </div>
            </div>
        </div>
    
    <div class="container-fluid" >
    <div class="row">
        <div class="col-sm-4">
        <?php
        include("navbar.php");
        ?>
        </div>
        <div class="col-sm-8" style=" margin-top:150px;">
            <table>
                <form action="connect.php" method="post" class="form-control">
                    <tr><td>Name</td><td><input type="text" name="name" id="name" placeholder="Enter the name" class="form-control"></td></tr>
                    <tr><td>College</td><td><input type="text" name="college" id="college" placeholder="Enter college name" class="form-control"></td></tr>
                    <tr><td>Email</td><td><input type="email" name="email" id="email" placeholder="Enter Email address" class="form-control"></td></tr>
                    <tr><td>Mobile</td><td><input type="number" name="mobile" id="mobile" placeholder="Enter mobile number" maxlength="10" minlength="10" class="form-control"></td></tr>
                    <tr><td><input type="submit" value="Submit" style="background-color:orangered;"></td></tr>
                </form>
            </table >
            <table style="margin-top:20px;" class="table table-stripped">
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
</html>