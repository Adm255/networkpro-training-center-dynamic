<?php
include '../../database/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO services (title, description)
              VALUES ('$title', '$description')";

    mysqli_query($conn, $query);

    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Service</title>
</head>

<body>

    <h1>Add New Service</h1>

    <form action="" method="POST">

        <label>Service Title</label><br>
        <input type="text" name="title" required><br><br>

        <label>Description</label><br>
        <textarea name="description" rows="5" cols="40" required></textarea><br><br>

        <button type="submit">Save Service</button>

    </form>

    <br>

    <a href="index.php">← Back to Manage Services</a>

</body>

</html>