<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- First form  -->
    <form action="index.php" method="post">
        <label>X: </label>
        <input type="text" name="x">
        <label>Y: </label>
        <input type="text" name="y">
        <label>Z: </label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>

    <br/>

    <!-- Second form  -->
    <form action="index.php" method="post">
        <label>Radius: </label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>

</html>
<?php
// First form 
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["y"];
$total = null;

// total = pi();
// total = rand(1, 10);
// $total = abs($x);
// $total = round($x); 
// $total = floor($x);  
// $total = ceil($x);
// $total = sqrt($x);
// $total = pow($x, $y); 
// $total = max($x, $y, $z);
// $total = min($x, $y, $z);

echo $x;

// Second form 
$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = 4/3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "Circumference = {$circumference}cm <br/>";
echo "Area = {$area}cm^2 <br/>";
echo "Volume = {$volume}cm^3 <br/>";
?>