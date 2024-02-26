<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "Josue Hoenicka";
$_SESSION["email"] = "josuehoenicka@example.com";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Session Example</title>
</head>

<body>

    <?php
    // Display session variables
    echo "Username: " . $_SESSION["username"] . "<br>";
    echo "Email: " . $_SESSION["email"] . "<br>";
    ?>

</body>

</html>