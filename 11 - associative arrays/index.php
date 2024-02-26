<?php
// Declare an associative array
$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

// Accessing elements of the associative array
echo "Name: " . $person["name"] . "<br>";
echo "Age: " . $person["age"] . "<br>";
echo "City: " . $person["city"] . "<br>";

// Modifying elements of the associative array
$person["age"] = 35;

// Adding a new element to the associative array
$person["occupation"] = "Engineer";

// Looping through the associative array
foreach ($person as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
