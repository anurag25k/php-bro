<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="index.php" method="post">
        <label for="">username</label>
        <input type="text" name="username" id="">
        <label for="">password</label>
        <input type="text" name="password" id="">
        <input type="submit" value="Log in">
    </form> -->
    <!-- <form action="index.php" method="post">
        <label for="">Quantity:</label><br>
        <input type="" name="quantity">
        <input type="submit" value="total">
    </form> -->
    <!-- <form action="index.php" method="post">
        <label for="">x:</label>
        <input type="text" name="x">
        
        <br>
        <label for="">y:</label>
        <input type="text" name="y">
       
        <br>
        <label for="">z:</label>
        <input type="text" name="z">
        <input type="submit" value="total"> -->

    </form>
    <form action="index.php" method="post">
        <label for="">radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>

</html>



<?php
//username password
//    echo "{$_POST["username"]} <br>";
//    echo "{$_POST["password"]} <br>";

// Pizzza shop
//$item="pizza";
// $price=5.99;
// $quantity=$_POST["quantity"];
// $total=null;

// $total=$quantity*$price;

// echo"You have ordered {$quantity} x {$item}/s";
// // echo"Your total is: \${$total}";
// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];
// $total = null;

// $total = abs($x);
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = pow($x,$y);
// $total = sqrt($y);
// $total=max($x,$y,$z);
// $total=min($x,$y,$z);
//$total=pi();
// $total=rand(1,100);

// echo "$total ";

$radius=$_POST["radius"];
$circumference = null;
$area=null;
$volume =null;

$circumference=2*pi()*$radius;
$circumference=round($circumference,2);

$area=pi()*pow($radius,2);
$area=round($area,2);

$volume=4/3 *pi()*pow($radius,2);
$volume=round($volume,2);

echo"Circumference ={$circumference}cm <br>";
echo"Area={$area}cm^2 <br>";
echo"volume={$volume}cm^3 <br>"

?>