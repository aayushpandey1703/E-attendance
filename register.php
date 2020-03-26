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
    <style>
        body{
            background: linear-gradient(to right,#0033ff,cadetblue);
            
        }
        .container{
            background: white;
            border-radius: 20px;
            margin-top: 5%;
            margin-left: 30%;
            padding: 150px;
              }
              .container2{
                  position: absolute;
                  margin-top: -26%;
                  margin-left: 70%;
              }
              input{
                  margin-top: 20px;
              }
              .container input[type='submit']{
                  position: absolute;
                  background: #0033ff;
                  color: white;
                  width: 170px;
                  padding: 6px;
                  border: none;
                  border-radius: 20px;
                  margin-left: 15%;
              }
              h2{
                  position: absolute;
                  margin-left: 50%;
                  margin-top: 5%;
                  opacity: 0.8;
              }
              .container3{
                  position: absolute;
                  margin-left: 84%; 
                  margin-top: 1%;
                  width: 10%;
                  height: 40px;
                  background: #0033ff;
                  border-radius: 10px;
              }
              .container3 input[type='submit']{
                  height: 30px;
                  margin-top: 5px;
                  margin-left: 2px;
                  width: 70px;
                  border-radius: 6px;
                  border: none;
                  outline: none;
                  background: white;
              }
              img{
                  position: absolute;
                  width: 20%;
                  height: 40%;
                  margin-left: 5%;
              }
              .text{
                  position: absolute;
                  width: 250px;
                  text-align: center;
                  color: white;
                  margin-top: 20%;
                  margin-left: 5%;
              }
              .text input[type='submit']{
                  height: 35px;
                   width: 140px;
                  border-radius: 18px;
                  border: none;
                  outline: none;
                  background: white;
                  
              }
    </style>
    <body>
        <form action="index.php" method="post">
        <img src="https://www.freeiconspng.com/uploads/blue-rocket-png-9.png">
        <div class="text">
        <h3>Welcome! </h3>
        <h4>Enter details for registration
            of faculty</h4>
      
        <input type="submit" value="Login" name="login" />
        </div>
        </form>
         <form action="register2.php" method="post">
            <div class="container3">
                <input type="submit" value="faculty" name="faculty" disabled="disabled" /> <input type="submit" value="student" name="student" style="background: none; border: none; color: white;"/>
            </div>
            </form>
        <form action="reg.php" method="post">
           
            <h2>Register a faculty member</h2>
            <div class="container">
                <p> <input type="text" name="uname"  placeholder="username"/></p>
                <p><input type="password" name="pass" value="" placeholder="password*"/></p>
                <p><input type="password" name="confirm" value="" placeholder="confirm password*"/></p>
            <p>admin <input type="checkbox" name="admin" value="ON" /></p>
  
            <p><input type="submit" value="Register" name="submit" /></p>
           
            </div>
            <div class="container2">
                <p><input type="text" name="email" value="" placeholder="E-mail Id"/></p>
                <p><input type="text" name="number" value="" placeholder="Phone number"/></p>
                <p><input type="text" name="income" value="" placeholder="Annual Income"/></p>
            </div>
            
        </form>
    </body>
</html>
