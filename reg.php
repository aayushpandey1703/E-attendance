<?php
require_once("connection.php");
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$confrim=$_POST['confirm'];
$admin=$_POST['admin'];
if($confrim==$pass)
{
    if($admin){
    $query="insert into login(unam,pass,role) values('".$uname."','".$pass."','admin')";
    $result=mysqli_query($con, $query);
    if($result)
    {
        echo '<script>';
        echo 'alert("data inserted")';
        echo '</script>';
        header("location:login.php");
        
    }
    else
    {
        echo 'something worng';
    }
    }
    else{
        $query="insert into login(unam,pass,role) values('".$uname."','".$pass."','faculty')";
    $result=mysqli_query($con, $query);
    if($result)
    {
        echo '<script>';
        echo 'alert("data inserted")';
        echo '</script>';
        header("location:login.php");
        
    }
    else
    {
        echo 'something worng';
    }
    }
}
else{
    header("location:register.php?action=alert");
}
?>