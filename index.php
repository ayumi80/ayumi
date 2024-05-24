<?php
include 'db.php';

$sql = "SELECT * FROM buku";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
   
</head>
<body>
    <h1>Book List</h1>
    <a href="create.php">Add New Book</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["judul"]; ?></td>
            <td><?php echo $row["pengarang"]; ?></td>
            <td><?php echo $row["tahun"]; ?></td>
            <td>
                <a href="show.php?id=<?php echo $row["id"]; ?>">Show</a>
                <a href="update.php?id=<?php echo $row["id"]; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
<?php $conn->close(); ?>