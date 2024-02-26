<?php
// Set a cookie
$cookie_name = "user";
$cookie_value = "John Doe";
// Cookie will expire in 1 day (86400 seconds)
$cookie_expire = time() + (86400 * 1);
setcookie($cookie_name, $cookie_value, $cookie_expire, "/");

// Retrieve the cookie
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie '" . $cookie_name . "' is not set!";
}
?>
