<?php
$host="localhost";
$user="root";
$pass="";
$dbnam="attd";
$con=  mysqli_connect($host, $user, $pass, $dbnam);
if(!$con)
{
    echo "somthing is wrong";
    
}
?>

