<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Example</title>
</head>

<body>

    <form action="index.php" method="post">
        <input type="checkbox" id="option1" name="choices[]" value="Option 1">
        <label for="option1">Option 1</label><br>
        <input type="checkbox" id="option2" name="choices[]" value="Option 2">
        <label for="option2">Option 2</label><br>
        <input type="checkbox" id="option3" name="choices[]" value="Option 3">
        <label for="option3">Option 3</label><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if any checkboxes are selected
        if (!empty($_POST["choices"])) {
            // Loop through each selected checkbox
            echo "You selected: ";
            foreach ($_POST["choices"] as $selected_option) {
                echo $selected_option . ", ";
            }
        } else {
            echo "Please select at least one option";
        }
    }
    ?>

</body>

</html>