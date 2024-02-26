<?php
// User's password
$password = "mySecurePassword123";

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Display the hashed password
echo "Hashed Password: " . $hashed_password . "<br>";

// Verify a password against the hashed password
$entered_password = "mySecurePassword123";
if (password_verify($entered_password, $hashed_password)) {
    echo "Password verified: Access granted!";
} else {
    echo "Password incorrect: Access denied!";
}
