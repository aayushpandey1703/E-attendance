<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <body>
        <table border='3' >
            <tr>
                <th>id</th>
                <th>image</th>
                <th>name of student</th>
                <th>roll no.</th>
                <th>class</th>
                <th>attendance</th>
                <th>percent attendance</th>
            </tr>
            <?php
            require 'connection.php';
            $query="select * from sheet";
            $result=  mysqli_query($con, $query);
            while($product=  mysqli_fetch_assoc($result)):
                $percent=$product['status']*100/40;
                ?>
            
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td><img src="<?php echo $product['image']; ?>" style="width:100px; height: 100px;"/></td>
                                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['roll'] ?></td>
                <td><?php echo $product['class'] ?></td>
                <td><?php echo $product['status'] ?>/40</td>
                <td><?php echo $percent; ?>%</td>

            </tr>
            <?php
            endwhile;
            ?>
        </table>
    </body>
</html>
