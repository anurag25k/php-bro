<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="associative.php" method="post">
        <label for="">Enter a country</label>
         <input type="text"  name="country">
         <input type="submit" name="" id="">
     </form>
</body>
</html>


<?php
  $capitals=array("USA"=> "Washington D.C.",
     "Japan"=>"Kyoto",
     "South Korea"=>"Seoul",
     "India"=>"New Delhi");
    $capital=$capitals[$_POST["country"]];
    echo "The capital is ". $capital;
?>