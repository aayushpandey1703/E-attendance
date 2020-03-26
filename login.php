<?php
session_start();
require "connection.php";
$_SESSION['uname']=$_POST['uname'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$query="select * from login where unam='".$uname."' and pass='".$pass."'";
$result=  mysqli_query($con, $query);
$num=  mysqli_num_rows($result);
$data=  mysqli_fetch_assoc($result);
if($num>0)
{
    if($data['role']=="faculty")
    {
        header("location:faculty.php");
        
    }
    else if($data['role']=="admin")
    {
        header("location:register.php");
    }
}
else
{
    header("location:index.php?action=alert");
}
