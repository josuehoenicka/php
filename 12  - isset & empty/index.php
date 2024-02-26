<?php
// Define an associative array
$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

// Check if a key exists using isset()
if (isset($person["name"])) {
    echo "Name is set.<br>";
} else {
    echo "Name is not set.<br>";
}

// Check if a key exists and is not empty using isset() and empty()
if (isset($person["age"]) && !empty($person["age"])) {
    echo "Age is set and not empty.<br>";
} else {
    echo "Age is either not set or empty.<br>";
}

// Unset a key
unset($person["city"]);

// Check if a key exists using isset()
if (isset($person["city"])) {
    echo "City is set.<br>";
} else {
    echo "City is not set.<br>";
}

// Check if a key exists and is not empty using isset() and empty()
if (isset($person["city"]) && !empty($person["city"])) {
    echo "City is set and not empty.<br>";
} else {
    echo "City is either not set or empty.<br>";
}
