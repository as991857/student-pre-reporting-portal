<?php
$id=$_REQUEST['id'];
$con=mysqli_connect('localhost','root','','project');
$query="select * from anil where id='$id'";
$result=mysqli_query($con,$query);
while($data=mysqli_fetch_assoc($result))
{
    $status=$data['status'];
    if($status=='Y'){
        
        $query1="update anil set status='N' where id='$id'";
        mysqli_query($con,$query1);
        header("location:verify.php");
    }
    else{
        $query2="update anil set status='Y' where id='$id'";
        mysqli_query($con,$query2);
        header("location:verify.php");
    }
}
?>