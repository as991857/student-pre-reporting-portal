<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Verification Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <?php
    include("header.php");
    ?>
    <div class="container-fluid">
        <table class="table table-stripped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Technology</th>
                <th>Photo</th>
                <th>Aadhar</th>
                <th>Marksheet</th>
                <th>Status</th>

            </tr>
            <tbody>
                <?php
                $con=mysqli_connect('localhost','root','','project');
                $query="select * from anil";
                $result=mysqli_query($con,$query);
                $id=1;
                while($data=mysqli_fetch_assoc($result))
                {
                ?>

               <tr>
                <td> <?php echo $id; ?><input type="hidden" name="id" value="<?php echo $data['id'];?>"></td>
                <td><?php echo $data['name'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['mobile'];?></td>
                <td><?php echo $data['technology'];?></td>
                <td><img src="./upload/photo/<?php echo $data['photo_name'] ;?>"></td>
                <td><img src="./upload/aadhar/<?php echo $data['aadhar_name'] ;?>"></td>
                <td><a href="http://localhost/project/upload/marksheet/<?php echo $data['marksheet_name'];?>">Download/Marksheet</a></td>
                <td><a href="status.php?id=<?php echo $data['id'];?>"><?php echo $data ['status']; ?></a></td>

                
                
                


               </tr>
               <?php
               $id++;
                }
               ?>
               
            </tbody>
            
        </table>
    </div>
</body>
</html>