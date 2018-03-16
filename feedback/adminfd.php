<?php
    include("connect.php");
    session_start();
    if(isset($_POST["sub"])){
        $product=$_POST["pname"];
        $cost=$_POST["cost"];
        $desc=$_POST["Details"];
        $qry="INSERT INTO `product`(`product`,`cost`,`desc`)VALUES('$product','$cost','$desc')";
        mysqli_query($conn,$qry) or die("Error inserting");
        header("location:logout.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <a href="Addproducts.php">Add <br><br>
        Productname :<input type="text" name="pname"><br><br>
        Cost :<input type="integer" name="cost"><br><br>
        Description :<textarea type="text" placeholder="Details"></textarea>

    </body>
</html>