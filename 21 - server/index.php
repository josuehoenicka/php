<!DOCTYPE html>
<html>

<head>
    <title>Server Variables Example</title>
</head>

<body>

    <?php
    // Server Name
    echo "<p>Server Name: " . $_SERVER['SERVER_NAME'] . "</p>";

    // Server Software
    echo "<p>Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";

    // Server Protocol
    echo "<p>Server Protocol: " . $_SERVER['SERVER_PROTOCOL'] . "</p>";

    // Server IP Address
    echo "<p>Server IP Address: " . $_SERVER['SERVER_ADDR'] . "</p>";

    // Server Port
    echo "<p>Server Port: " . $_SERVER['SERVER_PORT'] . "</p>";

    // Document Root
    echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";

    // Remote IP Address
    echo "<p>Remote IP Address: " . $_SERVER['REMOTE_ADDR'] . "</p>";

    // Remote Port
    echo "<p>Remote Port: " . $_SERVER['REMOTE_PORT'] . "</p>";

    // Request Method
    echo "<p>Request Method: " . $_SERVER['REQUEST_METHOD'] . "</p>";

    // Request URI
    echo "<p>Request URI: " . $_SERVER['REQUEST_URI'] . "</p>";

    // Script Filename
    echo "<p>Script Filename: " . $_SERVER['SCRIPT_FILENAME'] . "</p>";
    ?>

</body>

</html>