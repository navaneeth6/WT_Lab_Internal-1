<?php
    include("connect.php");
    session_start();
    if(isset($_POST["sub"])){
        $Name =$_POST["name"];
        $email =$_POST["email"];
        $password =$_POST["pwd"];
        $qry = "INSERT into `adminsig`(`name`,`email`,`password`) VALUES('$Name','$email','$password')";
        mysqli_query($conn,$qry) or die("error inserting");
        header("location :adminlogin.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register as Admin</title>
    </head>
    <body>
    <h2>Register as Admin</h2>
    <div class="b">    
    <form method="POST" action="">
        <p id="a">Please enter these details</p>
        <p>Name :<input type="text" placeholder="name" name="name"></p>
        <p>Email :<input type="email" placeholder="@gmail.com" name="email"></p>
        <p>Password :<input type="integer" placeholder="password" name="pwd" min="6"></p>
        <button name="sub">Submit</button>
    </form>
    </div>
    </body>
</html>