<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="foods[]" value="pizza">
        pizza <br>
        <input type="checkbox" name="foods[]" value="hamburger">
        hamburger <br>
        <input type="checkbox" name="foods[]" value="hotdog">
        hotdog <br>
        <input type="checkbox" name="foods[]" value="taco">
        taco <br>
        <input type="submit" name="submit" id="">
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $foods=$_POST["foods"];  

    foreach($foods as $food){
        echo $food."<br>";
    }
}
//     if(isset($_POST["pizza"])){
//         echo"you like pizza <br>";

//     }
//     if(isset($_POST["hamburger"])){
//         echo"you like hamburger <br>";
        
//     }
//     if(isset($_POST["hotdog"])){
//         echo"you like hotdog <br>";
        
//     }
//     if(isset($_POST["taco"])){
//         echo"you like taco <br>";
        
//     }
// }
?>