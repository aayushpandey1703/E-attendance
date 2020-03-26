<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
       
        .container{
            position: absolute;
            background: black;
            color: white;
            font: sans-serif;
            margin-left: 70%;
            height: 1000px;
            margin-top: -110px;
            width: 35%;
           
        }
        .container select{
            
            border: none;
            background: none;
            border-bottom: 1px solid white;
            outline: none;
            margin-top: 120px;
            width: 50%;
            color:white;
            margin-left: 5%;
            
        }
        .container option{
            background: black;
            font: sans-serif;
            margin-top: 90px;
            text-align: center;
            border: none;
            cursor: pointer;
            
        }
        .container input[type='submit']{
          position: relative;
            background: #ffffff;
            width: 17%;
            height: 30px;
            margin-left: 3%;
            border: none;
            transition: 0.2s;
            cursor: pointer;
            outline: none;
        }
        
        .container2{
            background: black;
            height: 90px;
            margin: -10px;
            color: white;
            
        }
        .container2 input[type='submit']{
            position: absolute;
            background: none;
            border: none;
            margin-left: 1%;
            margin-top: 1.5%;
            outline: none;
            color: white;
            font-size: 25px;
            height: 50px;
            cursor: pointer;
            
        }
        .container2 input[type='submit']:hover{
            border-bottom: 2px solid #00cc00;
            border-top: 2px solid #33cc00;
        }
        h2{
            color: white;
            margin-top: -80px;
            margin-left: 30%;
            font-size: 50px;
            font:sans-serif;
            
        }
        .c{
            color: red;
            margin-left:45%;
            margin-top: -6.5%;
        }
        .container3{
            position: absolute;
            width: 60%;
        }
         .d{
             position: absolute;
          width: 15%;
          opacity: 0.8;
          margin-top: 10%;
          margin-left: 25%;
        }
        .e{
            position: absolute;
            margin-left: 54%;
            margin-top: -1%;
            opacity: 0.8;
            height: 200px;
        }
        h3{
               position: absolute;
               font-size: 50px;
          opacity: 0.8;
          margin-top: 30%;
          margin-left: 19%;
        }
        .container3 table{
           margin-left: 2%;
           width: 90%;
           height: 50%;
           text-align: center;
           font-size: 25px;
        }
        .container3 input[type='submit']
        {
            position: absolute;
            margin-left: 97%;
            width: 140px;
            height: 50px;
            margin-top: 1%;
            background: black;
          
            border: 3px outset;
            color: white;
            cursor: pointer;
        }
        .container3 input[type='submit']:hover{
            background: #33cc00;
        }
        .f{
            background: red;
        }
        th{
            background: black;
            color: white;
            margin-top: 30%;
            width: 30%;
        }
        td{
            width: 90px;
            text-decoration: none;
            color: black;
        }
        </style>
    <body>
        <div class="container2">
            <form action="index.php" method="post">
            <input type="submit" value="Logout" name="logout" />      
            </form>
        </div>
                    <h2>Welcome, <h2><h2 class="c"><?php echo ($_SESSION['uname']);?></h2>
           <?php
           if(!isset($_POST['attend']))
           {
               ?>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTvhXFHVKRpC1JJ_QoZyEfmvZQukzW0ntMpmHIDINrFthCGnPBX" class="d">
                     <h3>Please select a class....</h3>
                     <img src="data:image/png;base64,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" class="e">
<?php
           }
           ?>
 <div class="container3">
        <?php
        if(isset($_POST['attend'])){
        ?>
        <form action="mark.php" method="post">
                
        <?php
         require 'connection.php';
         $class=$_POST['class'];
         $query="select id,name,roll from sheet where class='".$class."'";
         $result=  mysqli_query($con, $query);
         $i=0;
         ?>
             <table border='1'>
            <tr>
                <th>Id</th>
                <th>Name of student</th>
                <th>roll no.</th>
                <th>status</th>
            </tr>
            <?php
            
         while($student=mysqli_fetch_assoc($result)):
        ?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><a href='detail'><?php echo $student['name']; ?></a></td>
                <td><?php echo $student['roll'] ?></td>
                <td>P<input type="radio" name=present[<?php echo $i++; ?>] value=1 class="f"/>A<input type="radio" name=present[<?php echo $i++; ?>] value=0  /></td>
            </tr>
    
                <?php
    endwhile;
    ?>
            <input type="submit" value="mark" name="mark" />
     <?php

        }
                ?>
            
            
        </table>

        </form>
        </div>
        <form action="faculty.php" method="post">
        <div class="container">
            <p><label>Class: </label><select name="class" class="b"> 
                    <option></option>
                <option>fe cmpn a</option>
                <option>fe cmpn b</option>
                <option>se cmpn a</option>
                <option>se cmpn b</option>
                </select><input type="submit" value="Submit" name="attend" /></p>

        </div>
        </form>
          
    </body>
</html>
