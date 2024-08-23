<?php
include 'function.php';

$sql = "SELECT id, nama, email, telepon, paket FROM wisata";
$result = $conn->query($sql);
?>

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
<body>

<div class="container">
    <div class="row text-center">
        <div class="col md-5 mt-5">
        <h2>Data Wisatawan</h2>
        </div>

    </div>
    <div class="row">
        <div class="col-lg mt-5 center">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Telepon</th>
                <th scope="col">Paket</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["telepon"] . "</td>";
                    echo "<td>" . $row["paket"] . "</td>";
                    echo "<td>
                        <a href='edit.php?id=" . $row["id"] . "' class='btn btn-secondary btn-sm'>Edit</a>
                        <a href='hapus.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?');\">Hapus</a>
                        </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
        <a href="index.php">
            <button class="btn btn-dark">Kembali</button>
        </a>
        </div>
    </div>
</div>




</body>
<script>
        form.addEventListener("submit", (e) => {
        e.preventDefault();
        // ketika tombol submit di klik 
        // tampilkan tombol loading, hilangkan tmbol kirim
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        fetch(scriptURL, {
                method: "POST",
                body: new FormData(form)
            })
            .then((response) => {
                // tampilkan tombol kirim, hilangkan tmbol loading
                btnKirim.classList.toggle('d-none');
                btnLoading.classList.toggle('d-none');
                // Tampilkan alert 
                myAlert.classList.toggle('d-none');
                // reset form 
                form.reset();
                console.log("Success!", response)
            })
            .catch((error) => console.error("Error!", error.message));
    });
</script>

</html>
