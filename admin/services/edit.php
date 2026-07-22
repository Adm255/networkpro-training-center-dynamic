<?php
include '../../database/db.php';

$id = $_GET['id'];

$query = "SELECT * FROM services WHERE id = $id";
$result = mysqli_query($conn, $query);

$service = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "UPDATE services
              SET title='$title',
                  description='$description'
              WHERE id=$id";

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
    <title>Edit Service</title>
</head>

<body>

    <h1>Edit Service</h1>

    <form action="" method="POST">

        <label>Service Title</label><br>
        <input type="text" name="title" value="<?php echo $service['title']; ?>" required><br><br>

        <label>Description</label><br>
        <textarea name="description" rows="5" cols="40"
            required><?php echo $service['description']; ?></textarea><br><br>

        <button type="submit">Update Service</button>

    </form>

    <br>

    <a href="index.php">← Back to Manage Services</a>

</body>

</html>