<?php
// Declare an array
$fruits = array("Apple", "Banana", "Orange", "Strawberry");

// Access an array element by its index
echo "The first fruit is: " . $fruits[0] . "<br/>";

// Modify an array element
$fruits[1] = "Pear";

// Loop through an array with a foreach loop
foreach ($fruits as $fruit) {
    echo $fruit . "<br/>";
}

// Add an element to the end of the array
$fruits[] = "Kiwi";

// Get the length of the array
$length = count($fruits);
echo "The array contains " . $length . " elements.<br/>";

// Remove an element from the array
unset($fruits[2]);

// Loop through the updated array
foreach ($fruits as $fruit) {
    echo $fruit . "<br/>";
}
