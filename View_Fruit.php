<?php
class Fruit {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function getName() {
        return $this->name;
    }

    function getColor() {
        return $this->color;
    }
}

// Sample fruit
$apple = new Fruit("Apple", "Red");

// CRUD operations
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create
    if (isset($_POST["create"])) {
        $name = $_POST["name"];
        $color = $_POST["color"];
        $newFruit = new Fruit($name, $color);
        // Perform logic to save to database or other storage
    }

    // Update
    if (isset($_POST["update"])) {
        // Assuming you have an identifier like an ID for the fruit
        $fruitId = $_POST["fruit_id"];
        $updatedName = $_POST["name"];
        $updatedColor = $_POST["color"];
        // Perform logic to update the existing fruit in the database or other storage
    }

    // Delete
    if (isset($_POST["delete"])) {
        // Assuming you have an identifier like an ID for the fruit
        $fruitId = $_POST["fruit_id"];
        // Perform logic to delete the existing fruit from the database or other storage
    }
}
?>

<!-- View for CRUD operations -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit CRUD</title>
</head>
<body>
    <!-- Create Form -->
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="color">Color:</label>
        <input type="text" name="color" required>
        <button type="submit" name="create">Create</button>
    </form>

    <!-- Update Form -->
    <form method="POST">
        <label for="fruit_id">Fruit ID:</label>
        <input type="text" name="fruit_id" required>
        <label for="name">Updated Name:</label>
        <input type="text" name="name" required>
        <label for="color">Updated Color:</label>
        <input type="text" name="color" required>
        <button type="submit" name="update">Update</button>
    </form>

    <!-- Delete Form -->
    <form method="POST">
        <label for="fruit_id">Fruit ID:</label>
        <input type="text" name="fruit_id" required>
        <button type="submit" name="delete">Delete</button>
    </form>

    <!-- Read -->
    <h2>Fruit Details</h2>
    <p>Name: <?php echo $apple->getName(); ?></p>
    <p>Color: <?php echo $apple->getColor(); ?></p>
</body>
</html>
