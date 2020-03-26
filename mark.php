<?php
require 'connection.php';
$status=$_POST['present'];
$i=1;
foreach ($status as $key => $val) {
    $query="update sheet set status=status+'".$val."' where id='".$i++."'";
    $result=mysqli_query($con, $query);
if($result)
{

    ?>
<script>
    alert('attendance taken!!');
</script>

<?php
        header("location:faculty.php");

}
else{
    echo 'something went wrong';
}
}


?>