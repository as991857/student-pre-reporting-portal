
<?php
session_start();
?>
<?php
$email = $_POST['email'];
$password = $_POST['password'];
$con = mysqli_connect('localhost', 'root', '', 'project');
$query = "select * from anil_login";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
if ($row['email'] == $email && $row['password'] == $password) {
    $_SESSION['user'] = $email;
    header("location:admin.php");
}else{
    header("location:login.php?msg=1");
}



?>