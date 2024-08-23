


<!-- DB -->
<?php
include 'function.php';

$id = $_GET['id'];
$sql = "SELECT * FROM wisata WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan!";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $paket = $_POST['paket'];

    $sql = "UPDATE wisata SET nama='$nama', email='$email', telepon='$telepon', paket='$paket' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui";
    } else {
        echo "Error memperbarui data: " . $conn->error;
    }

    $conn->close();
    header("Location: lihatdata.php");
    exit();
}
?>
<!-- End DB -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md mt-5 text-center">
            <h2>Edit Data Pelanggan</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
        <form method="post">
            <div class="mb-3 mt-5">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama'];?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $row['email'];?>" required>
                    <div id="emailHelp" class="form-text">Masukan Email</div>
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="number" class="form-control"  name="telepon" value="<?php echo $row['telepon'];?>" required>
                </div>
                <div class="mb-3 form-floating">
                    <select class="form-select" id="floatingSelectGrid" name="paket" value="<?php echo $row['paket'];?>"required>
                    <option selected>Pilih Paket</option>
                    <option value="1">Paket 1</option>
                    <option value="2">Paket 2</option>
                    <option value="3">Paket 3</option>
                </select>
                <label for="floatingSelectGrid">Open this select menu</label>
                </div>
                <button type="submit" class="btn btn-primary" value="Update">Kirim</button>
</form>
        </div>
    </div>
</div>


</body>
</html>
