<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- style css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Wisata Park Zoo</title>
</head>
<!-- dataBase -->
<?php
    // $showAlert = false; // Variabel untuk mengontrol apakah alert ditampilkan atau tidak
    include 'function.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];
        $paket = $_POST['paket'];

        $sql = "INSERT INTO wisata (nama, email, telepon, paket) VALUES ('$nama', '$email', '$telepon', '$paket')";

        if ($conn->query($sql) === TRUE) {
            echo " ";
        } else {
            echo "Error: " . $sql . $conn->error;
        }

        $conn->close();
    }
?>
<!-- end dataBase -->
<body>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <img src="../web/images/vio.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="#">VIONA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#paket">Paket</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#fasilitas">Fasilitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pesanan">Pemesanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lihatdata.php">Lihat Data</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
        <!-- Akhir Navbar -->

            <!-- Header Section -->
    <header class="hero" id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="container1 carousel-inner">
            <div class="row">
                <div class="col">
                    <h3>Discover Lembang Park Zoo</h3>
                    <p class="lead">Langsung Pesan Tiket Lembang Park Zoo dan Mulai Petualanganmu!</p>
                    <a href="#pesanan" class="btn btn-dark">PESAN SEKARANG</a>
                </div>
            </div>
        </div>
    </header>
    <!-- akhir section -->

        <!-- Info-->
        <section class="gallery mt-1 paket mb-3" id="paket">
            <div class="container">
                <div class="row text-center p-5">
                    <div class="col">
                        <h2><b>Promo Paket Kamis Manis</b></h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="text-center">
                            <p><b>Paket 1</b></p>
                        </div>
                        <div class="card glass-card">
                            <img src="../web/images/paket renang.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h4>Family Fun Day (1 Hari)</h4>
                            <p class="card-text">Tiket masuk, pemandu wisata, makan siang di cafe tematik, akses ke semua wahana, dan pertunjukan hewan.</p>
                            <p class="promo">Promo 1 Agustus sampai 28 Agustus 2024</p>
                            <p><b>Rp.250.000</b></p><br>
                            <a href="#pesanan" class="btn btn-dark">Pergi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <p><b>Paket 2</b></p>
                        </div>
                        <div class="card glass-card">
                            <img src="../web/images/lembangkebun.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h4>Weekend Escape (2 Hari 1 Malam)</h4>
                            <p class="card-text">Tiket masuk 2 hari, penginapan di hotel dekat taman, makan 3 kali sehari, pemandu wisata, dan akses VIP ke semua wahana.</p>
                            <p class="promo">Promo 1 Agustus sampai 28 Agustus 2024</p>
                            <p><b>Rp.  Rp.600.000/orang</b></p><br>
                            <a href="#pesanan" class="btn btn-dark">Pergi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <p><b>Paket 3</b></p>
                        </div>
                        <div class="card glass-card">
                            <img src="../web/images/lembangAnimal.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h4>Adventure with Kids (1 Hari)</h4>
                            <p class="card-text"> Tiket masuk, akses ke semua wahana, makan siang, pemandu wisata anak, serta suvenir spesial.</p>
                            <p class="promo">Promo 1 Agustus sampai 28 Agustus 2024</p>
                            <p><b>Rp. 6.500.000/Hari</b></p><br>
                            <a href="#pesanan" class="btn btn-dark">Pergi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Info -->
        

        <!-- Fasilitas  -->
        <section id="fasilitas" class="fasilitas">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="col">
                        <h2><b>Fasilitas</b></h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Kebun Binatang
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Menampilkan berbagai jenis satwa dari seluruh dunia, dengan area khusus untuk interaksi langsung dengan beberapa hewan.
                                </div>
                            </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Wahana Permainan
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    Beragam wahana seperti perahu dayung, ATV, dan kereta mini yang cocok untuk anak-anak dan keluarga.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Food Court & Kafe
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    Tersedia beberapa tempat makan dengan pilihan kuliner lokal dan internasional, termasuk area outdoor dengan pemandangan alam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Arena Berkuda
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    Pengunjung dapat menikmati pengalaman menunggang kuda di area yang aman dan nyaman.
                                    </div>
                            </div>
                        </div>
                </div>
                </div>
                </div>
            </div>
        </section>
        <!-- Akhir Faislitas -->

        <!-- Pesanan -->
        <section class="contact pesanan" id="pesanan">
            <div class="container">
                    <div class="col text-center">
                        <h2><b>Pesanan</b></h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" aria-describedby="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="email">
                            </div>
                            <div class="mb-3">
                                <label for="number" class="form-label">No Telepon</label>
                                <input type="number" class="form-control" name="telepon" aria-describedby="number">
                            </div>
                            <div class="mb-3 form-floating">
                                <select class="form-select" id="floatingSelectGrid" name="paket">
                                    <option selected>Pilih Paket</option>
                                    <option value="1">Paket 1</option>
                                    <option value="2">Paket 2</option>
                                    <option value="3">Paket 3</option>
                                </select>
                                <label for="floatingSelectGrid">Open this select menu</label>
                            </div>
                            <button type="submit" class="btn btn-dark" name="submit" value="Submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Akhir Pesanan-->

        <!-- About -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col text-center mt-5 mb-5 pt-4">
                        <h2><b>About</b></h2>
                    </div> 
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div id="carouselExampleCaptions" class="carousel slide">
                            <div class="carousel-indicators">
                                <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                            </div>
                            <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./img/ridho-ibrahim-Q5dKAbRfPN0-unsplash.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                        <h5>Raja Ampat</h5>
                                        <p>Raja Ampat, simfoni alam yang menyajikan keindahan karang dan laut biru nan jernih.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./img/yonatan-anugerah-gpDGGx472yg-unsplash.jpg" class="d-block w-100" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Raja Ampat</h5>
                                    <p>Permata Nusantara, Raja Ampat adalah surga tersembunyi dengan panorama laut yang memukau.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./img/9.jpg" class="d-block w-100" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Raja Ampat</h5>
                                    <p>Menjelajahi Raja Ampat, kita disuguhi pesona pulau-pulau eksotis yang memanjakan mata.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5 boyol">
                    <div class="col-md-6">
                        <p>
                        Lembang Park Zoo adalah destinasi wisata keluarga yang menawarkan pengalaman menyenangkan untuk semua usia. Terletak di Lembang, Jawa Barat, tempat ini menyediakan berbagai jenis hewan dari seluruh dunia, fasilitas rekreasi seperti wahana permainan, area edukasi, dan kafe dengan pemandangan indah. Selain melihat satwa, pengunjung bisa berinteraksi langsung dengan beberapa hewan dan menikmati suasana alam yang segar. Lembang Park Zoo menjadi pilihan liburan favorit bagi keluarga yang ingin merasakan petualangan di alam terbuka sambil belajar tentang satwa.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                        Selain itu, Lembang Park & Zoo juga memiliki berbagai atraksi, seperti wahana menunggang kuda, memberi makan hewan, dan menikmati pertunjukan hewan yang edukatif. Tidak hanya itu, terdapat juga kafe dan restoran tematik yang menawarkan pemandangan indah serta spot foto instagramable disetiap sudut.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir About -->
        <!-- footer -->
        <footer class="bg-dark">
            <p class="text-center text-white">Create by <b>JWD-F_VIONA</b> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
            </svg></p>
        </footer>
        <!-- akhir footer -->
    
    </section>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- jQuery (untuk memudahkan AJAX) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // JavaScript untuk mengubah navbar menjadi solid saat di-scroll
    window.addEventListener('scroll', function() {
var navbar = document.querySelector('.navbar');
if (window.scrollY > 50) { // Sesuaikan angka 50 ini dengan keinginanmu
navbar.classList.add('scrolled');
} else {
navbar.classList.remove('scrolled');
}
});
</script>
</script>
</html>





