<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons Example</title>
</head>

<body>

    <form action="index.php" method="post">
        <input type="radio" id="option1" name="choice" value="Option 1">
        <label for="option1">Option 1</label><br>
        <input type="radio" id="option2" name="choice" value="Option 2">
        <label for="option2">Option 2</label><br>
        <input type="radio" id="option3" name="choice" value="Option 3">
        <label for="option3">Option 3</label><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the "choice" radio button is set and not empty
        if (isset($_POST["choice"]) && !empty($_POST["choice"])) {
            $selected_option = $_POST["choice"];
            echo "You selected: " . $selected_option;
        } else {
            echo "Please select an option";
        }
    }
    ?>

</body>

</html>