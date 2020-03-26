<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>

    </head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            background: url("https://www.expatrio.com/sites/default/files/2019-11/international_student_applying_for_visa_in_germany.jpg");
           
           
        }
       
        .container{
            position: absolute;
           width: 100%;
           padding: 100%;
           left: 50%;
           top: 50%;
           transform: translate(-50%,-50%);
             background: rgba(0,0,0,.8);
            background-size: cover;

    
}
         .container input[type='text']
         {
             font: sans-serif;
             width: 300px;
             background:none;
             border: none;
             border-bottom:3px solid #00cc00;
             border-radius: 20px;
             outline: none;
             color: white;
             margin-top: 10%;
             transition: 0.25s;
         }
           .container input[type='password']
         {
             font: sans-serif;
             width: 300px;
             margin-left: -60%;
             background:none;
             border: none;
             border-bottom:3px solid #00cc00;
             border-radius: 20px;
             outline: none;
             color: white;
             transition: 0.25s;
         }
         label{
             color: white;
             position: relative;
             margin-top: -50px;
         }
         .container input[type='submit']
         {
             background: none;
             
            margin-top: 30px;
            color: white;
            border:1px solid #00cc00;
            border-radius: 5px;
            width: 300px;
            height: 50px;
            transition: 0.25s;
         }
         input[type='submit']:hover{
             background: #ffff00;
         }
          input[type='text']:hover{
             border-bottom:solid #ffff00;
             border-radius: 0px;
         }
          input[type='password']:hover{
             border-bottom:solid #ffff00;
             border-radius: 0px;
         }
        </style>
    <body>
        <form action="login.php" method="post">
            <div class="container">
                      <?php
            if(isset($_GET['action']))
            {
                
                echo("something went worong");
            }
            ?>
                <p><label>username</label><input type="text" name="uname" value="" /></p>
        <p><label for="float">password</label><input type="password" name="pass" value="" /></p>
                <p><input type="submit" value="login" name="login" /></p>
            </div>
        </form>
    </body>
</html>
