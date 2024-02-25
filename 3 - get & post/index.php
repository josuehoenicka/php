<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- GET Form -->
    <form action="index.php" method="get">
        <label for="">Username: </label>
        <input type="text" name="username"><br />
        <label for="">Password: </label>
        <input type="password" name="password"><br />
        <input type="submit" value="Log in">
        <br/>
    </form>
    
    <!-- POST Form -->
    <form action="index.php" method="post">
        <label for="">Quantity: </label>
        <input type="number" name="quantity"><br />
        <input type="submit" value="total">
        <br/>
    </form>
    <br/>
</body>

</html>
<?php
    // GET Form
    echo $_GET["username"] . "<br/>";
    echo  $_GET["password"] . "<br/>";
    
    // POST Form
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $quantity * $price;

    echo "You have ordered {$quantity} x {$item}/s" . "<br/>";
    echo "Your total is : \${$total}";
?>