<?php
$age = 21;

if ($age >= 18) {
    echo "I'm an adult, because I'm {$age}";
} elseif ($age <= 18 && $age >= 0) {
    echo "I'm an young, because I'm {$age}";
} else {
    echo "I'm not exist yet :(";
}
