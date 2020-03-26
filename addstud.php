 <?php
        if(isset($_POST['add']))
        {
            $desti=$_FILES['image']['name'];
            require 'connection.php';
            $name=$_POST['name'];
            $roll=$_POST['roll'];
            $class=$_POST['class'];
            $date=$_POST['date'];
            $phone=$_POST['phone'];
            $image=$_FILES['image']['name'];
            $query="insert into sheet(image,name,roll,class,date,phone) values('$image','$name','$roll','$class','$date','$phone')";
            move_uploaded_file($_FILES['image']['tmp_name'], $desti);
           $result=mysqli_query($con, $query);
            if($result)
            {
                ?>
        <script>
        alert('data inserted')
        </script>
      
        <?php
                        header("location:register2.php");
            }
            else{
                echo 'wrong';
            }
         }
        ?>