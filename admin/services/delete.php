<?php
include '../../database/db.php';

$id = $_GET['id'];

$query = "DELETE FROM services WHERE id = $id";

mysqli_query($conn, $query);

header("Location: index.php");
exit();
?>