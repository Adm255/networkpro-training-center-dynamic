<?php
include '../../database/db.php';

$query = "SELECT * FROM services";
$result = mysqli_query($conn, $query);
?>

<?php include '../../includes/header.php'; ?>
<?php include '../../includes/navbar.php'; ?>

<div class="container">

    <h1>Manage Services</h1>

    <p>
        <a href="create.php" class="btn btn-add">
            + Add New Service
        </a>
    </p>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td>
                    <?php echo $row['id']; ?>
                </td>
                <td>
                    <?php echo $row['title']; ?>
                </td>
                <td>
                    <?php echo $row['description']; ?>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">
                        Edit
                    </a>

                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-delete"
                        onclick="return confirm('Are you sure you want to delete this service?');">
                        Delete
                    </a>
                </td>
            </tr>
        <?php } ?>

    </table>
</div>
<?php include '../../includes/footer.php'; ?>