<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions Example</title>
</head>

<body>

    <?php
    // Example 1: strlen()
    $string = "Hello, world!";
    $length = strlen($string);
    echo "Length of the string: $length<br>";

    // Example 2: strtolower()
    $string = "Hello, WORLD!";
    $lowercase = strtolower($string);
    echo "Lowercased string: $lowercase<br>";

    // Example 3: strtoupper()
    $string = "Hello, world!";
    $uppercase = strtoupper($string);
    echo "Uppercased string: $uppercase<br>";

    // Example 4: substr()
    $string = "Hello, world!";
    $substring = substr($string, 0, 5);
    echo "Substring: $substring<br>";

    // Example 5: strpos()
    $string = "Hello, world!";
    $position = strpos($string, "world");
    echo "Position of 'world': $position<br>";

    // Example 6: str_replace()
    $string = "Hello, world!";
    $new_string = str_replace("world", "John", $string);
    echo "New string: $new_string<br>";
    ?>

</body>

</html>