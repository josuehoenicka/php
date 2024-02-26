<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize and Validate Input</title>
</head>

<body>

    <?php
    // Define variables to store sanitized input
    $name = $email = "";

    // Define variables to store validation errors
    $nameErr = $emailErr = "";

    // Function to sanitize input
    function sanitizeInput($data)
    {
        $data = trim($data); // Remove whitespace from the beginning and end
        $data = stripslashes($data); // Remove backslashes
        $data = htmlspecialchars($data); // Convert special characters to HTML entities
        return $data;
    }

    // Function to validate email
    function validateEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and validate name
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = sanitizeInput($_POST["name"]);
        }

        // Sanitize and validate email
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = sanitizeInput($_POST["email"]);
            if (!validateEmail($email)) {
                $emailErr = "Invalid email format";
            }
        }
    }
    ?>

    <form action="index.php" method="post">
        Name: <input type="text" name="name">
        <span class="error"><?php echo $nameErr; ?></span>
        <br><br>
        Email: <input type="text" name="email">
        <span class="error"><?php echo $emailErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Display sanitized input
    echo "<h2>Your Input:</h2>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    ?>

</body>

</html>