<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM buku WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Book</title>
</head>
<body>
    <h1>Show Book</h1>
    <p>ID: <?php echo $row["id"]; ?></p>
    <p>Judul: <?php echo $row["judul"]; ?></p>
    <p>Pengarang: <?php echo $row["pengarang"]; ?></p>
    <p>Tahun: <?php echo $row["tahun"]; ?></p>
    <a href="index.php">Back to List</a>
</body>
</html>
<?php $conn->close(); ?>