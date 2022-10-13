<?php include './koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UniPin - The Leading Digital Entertainment Enabler</title>

    <?php include './docs/head.html'; ?>
</head>

<body>
    <!-- Top Promotion Nav -->

    <!-- /Top Promotion Nav -->

    <!-- Navbar -->
    <?php include './docs/navbar.html'; ?>
    <!-- //Navbar -->

    <!-- Showcase -->
    <?php //include './docs/jumbotron.html'; 
    ?>
    <!-- /Showcase -->

    <!-- Carousel -->
    <?php include './docs/carousel.html'; ?>
    <!-- /Carousel -->

    <!-- Content -->
    <div class="container py-4">
        <div class="content-title pb-4">
            <h2 class="text-uppercase">Kode Voucher</h6>
                <h1 class="fw-bold">Trending Sekarang</h5>
        </div>
        <div class="row">
            <div class="col-4 col-md-3 col-lg-2 pt-2 pt-lg-4">
                <div class="card card-show">
                    <div class="card-image">
                        <img src="./dist/img/products/steam_tile.jpg" alt="">
                    </div>
                    <div class="card-elemen pt-4 pt-md-5">
                        <p class="card-desc text-muted">Steam</p>
                        <p class="card-title text-nowarp mb-3">Steam Wallet USD</p>

                        <a href="./produk.php">
                            <button type="button" name="more" class="btn btn-light btn-pop btn-sm col-12 mx-auto text-uppercase">Beli</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-3 col-lg-2 pt-2 pt-lg-4">
                <div class="card card-show">
                    <div class="card-image">
                        <img src="./dist/img/products/googlep_tile.jpg" alt="">
                    </div>
                    <div class="card-elemen pt-4 pt-md-5">
                        <p class="card-desc text-muted">Google Play</p>
                        <p class="card-title text-nowarp mb-3">Google Wallet USD</p>

                        <a href="./produk2.php">
                            <button type="button" name="more" class="btn btn-light btn-pop btn-sm col-12 mx-auto text-uppercase">Beli</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-3 col-lg-2 pt-2 pt-lg-4">
                <div class="card card-show">
                    <div class="card-image">
                        <img src="./dist/img/products/spotify_tile.png" alt="">
                    </div>
                    <div class="card-elemen pt-4 pt-md-5">
                        <p class="card-desc text-muted">Spotify</p>
                        <p class="card-title text-nowarp mb-3">Spotify Premium</p>

                        <a href="./produk.php">
                            <button type="button" name="more" class="btn btn-light btn-pop btn-sm col-12 mx-auto text-uppercase">Beli</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-3 col-lg-2 pt-2 pt-lg-4">
                <div class="card card-show">
                    <div class="card-image">
                        <img src="./dist/img/products/pubgm_rps_tile.jpg" alt="">
                    </div>
                    <div class="card-elemen pt-4 pt-md-5">
                        <p class="card-desc text-muted">Tencent Games</p>
                        <p class="card-title text-nowarp mb-3">Mobile UC Code</p>

                        <a href="./produk.php">
                            <button type="button" name="more" class="btn btn-light btn-pop btn-sm col-12 mx-auto text-uppercase">Beli</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-3 col-lg-2 pt-2 pt-lg-4">
                <div class="card card-show">
                    <div class="card-image">
                        <img src="./dist/img/products/minecraft_tile.jpg" alt="">
                    </div>
                    <div class="card-elemen pt-4 pt-md-5">
                        <p class="card-desc text-muted">Mojang</p>
                        <p class="card-title text-nowarp mb-3">Java Edition </p>

                        <a href="./produk.php">
                            <button type="button" name="more" class="btn btn-light btn-pop btn-sm col-12 mx-auto text-uppercase">Beli</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-3 col-lg-2 pt-2 pt-lg-4">
                <div class="card card-show">
                    <div class="card-image">
                        <img src="./dist/img/products/gta_tile.jpg" alt="">
                    </div>
                    <div class="card-elemen pt-4 pt-md-5">
                        <p class="card-desc text-muted">Rockstar Games</p>
                        <p class="card-title text-nowarp mb-3">Premium Edition</p>

                        <a href="./produk.php">
                            <button type="button" name="more" class="btn btn-light btn-pop btn-sm col-12 mx-auto text-uppercase">Beli</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Content -->


    <!-- Jquery JS -->
    <script src="./plugins/jquery/jquery-3.6.0.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="./plugins/bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- OwlCarousel JS -->
    <script src="./plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- Main JS -->
    <script src="./dist/js/main.js"></script>
</body>

</html>