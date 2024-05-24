<?php
include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['tahun'];
    $pengarang = $_POST['pengarang'];
    $tahun = $_POST['tahun'];

    $sql = "UPDATE buku SET judul='$judul', pengarang='$pengarang', tahun=$tahun WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $sql = "SELECT * FROM buku WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form method="POST">
        <p>Judul: <input type="text" name="judul" value="<?php echo $row['judul']; ?>"></p>
        <p>Pengarang: <input type="text" name="pengarang" value="<?php echo $row['pengarang']; ?>"></p>
        <p>Tahun: <input type="number" name="tahun" value="<?php echo $row['tahun']; ?>"></p>
        <p><input type="submit" value="Update"></p>
    </form>
    <a href="index.php">Back to List</a>
</body>
</html>
<?php $conn->close(); ?>