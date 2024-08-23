<?php
include 'function.php';

$id = $_GET['id'];

$sql = "DELETE FROM wisata WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error menghapus data: " . $conn->error;
}

$conn->close();

header("Location: lihatdata.php");
exit();
?>
