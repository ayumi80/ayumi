<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun = $_POST['tahun'];

    $sql = "INSERT INTO buku (judul, pengarang, tahun) VALUES ('$judul', '$pengarang', $tahun)";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Book</title>
</head>
<body>
    <h1>Add New Book</h1>
    <form method="POST">
        <p>Judul: <input type="text" name="judul"></p>
        <p>Pengarang: <input type="text" name="pengarang"></p>
        <p>Tahun: <input type="number" name="tahun"></p>
        <p><input type="submit" value="Add"></p>
    </form>
    <a href="index.php">Back to List</a>
</body>
</html>
<?php $conn->close(); ?>