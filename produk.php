<?php

include './koneksi.php';


$title = "Steam Wallet (USD)";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UniPin - Steam Wallet (USD)</title>

    <link rel="stylesheet" href="./vendor/stripe/stripe-php/style.css">

    <?php include './docs/head.html'; ?>
</head>

<body>
    <!-- Navbar -->
    <?php include './docs/navbar.html'; ?>
    <!-- //Navbar -->

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5 pt-4">
                <div class="card card-product">
                    <div class="card-body card-chest">
                        <div class="d-flex flex-row justify-items-start">
                            <div class="product-icon">
                                <img src="./dist/img/products/steam_tile.jpg" alt="">
                            </div>

                            <div>
                                <div class="game-publisher">
                                    <span class="type-product">Voucher</span>
                                    <p class="product-dev text-muted">Steam</p>
                                </div>

                                <p class="product-name fs-lg-5">Steam Wallet (USD)</p>
                            </div>
                        </div>

                        <div class="product-desc mt-1" id="text-container">
                            <p class="p-0 m-0"><strong><em>**Kode dapat ditukarkan sesuai dengan Wilayah Steam Wallet / Pengaturan Mata Uang Anda.**</em></strong></p>
                            <span class="moreText">
                                <p class="mt-3">Mau top up Steam Wallet? Kamu bisa mendapatkan Steam Wallet Code dengan membelinya di UniPin. Caranya sangat mudah, tinggal pilih saja nominal isi Steam Wallet yang kamu inginkan. Kamu bisa beli voucher Steam dengan nominal mulai dari 1 USD sampai 100 USD.</p>
                                <p>Beli Steam Wallet di UniPin bisa dilakukan via Visa dan MasterCard. Top up Steam Wallet juga bisa dilakukan tanpa harus mendaftar, login dan tanpa ribet aktifasi.</p>
                                <p>Steam adalah layanan distribusi digital video game yang dibuat oleh Valve. Awalnya diluncurkan hanya untuk pembaruan otomatis game mereka, sekarang Steam bisa digunakan untuk membeli dan melakukan pembaruan game dari pihak ketiga. Kamu bisa memanfaatkan Steam dengan beli voucher Steam di UniPin.</p>
                            </span>
                            <button type="button" class="moreBtn" id="moreBtn" onclick="moreText()">More</button>
                        </div>

                        <div class="product-list">
                            <div class="list-icon">
                                <a href="https://store.steampowered.com/about/" target="_blank">
                                    <i class="fas fa-download"></i>
                                    <p class="mt-1">Unduh</p>
                                </a>
                            </div>
                            <div class="list-icon">
                                <a href="https://store.steampowered.com/" target="_blank">
                                    <i class="fas fa-globe"></i>
                                    <p class="mt-1">Situs Web</p>
                                </a>
                            </div>
                            <div class="list-icon">
                                <a href="https://steamcommunity.com/" target="_blank">
                                    <i class="fas fa-comments"></i>
                                    <p class="mt-1">Komunitas</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-7 pt-4 form-transaction">
                <form autocomplete="off" action="./charge.php" method="POST" name="form-transaksi" onsubmit="return TransaksiValid()" id="payment-form">
                    <div class="card card-product">
                        <div class="card-body card-chest">
                            <div class="d-flex flex-row justify-items-start step-title mb-4">
                                <div class="step-circle">1</div>
                                <span class="text-uppercase step-right-circle">Pilih Nominal</span>
                            </div>

                            <div class="input-grid-container">
                                <div class="input-grid-items">
                                    <input type="radio" name="nominal" id="1" class="hidebx" value="100">
                                    <label for="1" class="lbl-radio">
                                        <div class="display-box">
                                            <span class="nominal">Steam Wallet 1 USD</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="input-grid-items">
                                    <input type="radio" name="nominal" id="2" class="hidebx" value="200">
                                    <label for="2" class="lbl-radio">
                                        <div class="display-box">
                                            <span class="nominal">Steam Wallet 2 USD</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="input-grid-items">
                                    <input type="radio" name="nominal" id="3" class="hidebx" value="500">
                                    <label for="3" class="lbl-radio">
                                        <div class="display-box">
                                            <span class="nominal">Steam Wallet 5 USD</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="input-grid-items">
                                    <input type="radio" name="nominal" id="4" class="hidebx" value="1000">
                                    <label for="4" class="lbl-radio">
                                        <div class="display-box">
                                            <span class="nominal">Steam Wallet 10 USD</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="input-grid-items">
                                    <input type="radio" name="nominal" id="5" class="hidebx" value="1500">
                                    <label for="5" class="lbl-radio">
                                        <div class="display-box">
                                            <span class="nominal">Steam Wallet 15 USD</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="input-grid-items">
                                    <input type="radio" name="nominal" id="6" class="hidebx" value="2000">
                                    <label for="6" class="lbl-radio">
                                        <div class="display-box">
                                            <span class="nominal">Steam Wallet 20 USD</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="input-grid-items">
                                    <input type="radio" name="nominal" id="7" class="hidebx" value="3000">
                                    <label for="7" class="lbl-radio">
                                        <div class="display-box">
                                            <span class="nominal">Steam Wallet 30 USD</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="input-grid-items">
                                    <input type="radio" name="nominal" id="8" class="hidebx" value="5000">
                                    <label for="8" class="lbl-radio">
                                        <div class="display-box">
                                            <span class="nominal">Steam Wallet 50 USD</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="input-grid-items">
                                    <input type="radio" name="nominal" id="9" class="hidebx" value="6000">
                                    <label for="9" class="lbl-radio">
                                        <div class="display-box">
                                            <span class="nominal">Steam Wallet 60 USD</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="input-grid-items">
                                    <input type="radio" name="nominal" id="10" class="hidebx" value="7000">
                                    <label for="10" class="lbl-radio">
                                        <div class="display-box">
                                            <span class="nominal">Steam Wallet 70 USD</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="input-grid-items">
                                    <input type="radio" name="nominal" id="11" class="hidebx" value="10000">
                                    <label for="11" class="lbl-radio">
                                        <div class="display-box">
                                            <span class="nominal">Steam Wallet 100 USD</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="card card-product">
                        <div class="card-body card-chest" id="accordionFlushExample">
                            <div class="d-flex flex-row justify-items-start step-title mb-4">
                                <div class="step-circle">2</div>
                                <span class="text-uppercase step-right-circle">Pilih Saluran Pembayaran</span>
                            </div>

                            <div class="form-text text-muted mt-3">Semua Saluran Pembayaran</div>

                            <div class="bayar-container mb-4">
                                <input class="accordion-button collapsed hidebx" name="pembayaran" type="radio" value="Pulsa Seluler" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" id="pulsa-1">
                                <label for="pulsa-1" class="lbl-radio-pay">
                                    <div class="bayar-items d-flex flex-row">
                                        <div class="paling-kiri">
                                            <i class="fas fa-mobile-alt"></i>
                                            <span>Pulsa Seluler</span>
                                        </div>

                                        <span class="harga">IDR 10,800</span>
                                    </div>
                                </label>
                                </input>

                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="bayar-items-bawah d-flex flex-row justify-content-end">
                                            <img src="./dist/img/1628850379-NEW Telkomsel Logo_150x56.webp" alt="">
                                            <img src="./dist/img/1572342520-xl.webp" alt="">
                                            <img src="./dist/img/1557992278-1552289148-tri_logo-01-min.webp" alt="">
                                            <img src="./dist/img/1557991864-1532506445-zingmobile_INDOSAT-min.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bayar-container mb-4">
                                <input class="accordion-button collapsed hidebx" name="pembayaran" type="radio" value="E-wallet" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" id="pulsa-2">
                                <label for="pulsa-2" class="lbl-radio-pay">
                                    <div class="bayar-items d-flex flex-row">
                                        <div class="paling-kiri">
                                            <i class="fas fa-wallet"></i>
                                            <span>E-wallet</span>
                                        </div>

                                        <span class="harga">IDR 10,400</span>
                                    </div>
                                </label>
                                </input>

                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="bayar-items-bawah-2 d-flex flex-row justify-content-end">
                                            <img src="./dist/img/1568261197-gopay-small.webp" alt="">
                                            <img src="./dist/img/1557992304-1554438111-DANA-min.webp" alt="">
                                            <img src="./dist/img/1618814631-ovo 150x56.webp" alt="">
                                            <img src="./dist/img/1586313168-KILOP-01.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="card card-product mb-4">
                        <div class="card-body card-chest-2">
                            <div class="d-flex flex-row justify-items-start step-title mb-4">
                                <div class="step-circle">2</div>
                                <span class="text-uppercase step-right-circle">Pembayaran</span>
                            </div>

                            <div class="input-grid-container-2">
                                <div class="input-grid-items-2 input-group input-group-sm mb-2">
                                    <!-- <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span> -->

                                    <input type="text" name="email" id="email" placeholder="Email Address" class="form-control input-email-telfon StripeElement StripeElement--empty"></input>

                                    <!-- <input type="text" class="form-control input-email-telfon" value=""></input> -->
                                </div>

                                <div class="input-grid-items-2 input-group input-group-sm">
                                    <!-- <span class="input-group-text" id="basic-addon1"><i class="fas fa-credit-card fa-sm"></i></span> -->

                                    <div id="card-element" class="form-control">
                                        <!-- a Stripe Element will be inserted here. -->
                                    </div>
                                </div>
                            </div>

                            <div class="buy-button mt-2">
                                <!-- Used to display form errors -->
                                <div id="card-errors" role="alert" class="card-error"></div>

                                <p class="catatan-buy">Catatan: Voucher akan dikirim ke email di atas setelah transaksi selesai. Silakan hubungi Layanan Pelanggan * jika mengalami masalah.</p>

                                <button type="submit" id="checkout-button">Beli Sekarang!</button>
                                <!-- <button type="submit" name="submit" id="submit" class="btn btn-buy btn-sm col-5 col-md-3 col-lg-4 col-xl-3">Beli Sekarang!</button> -->
                            </div>


                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Content -->




    <!-- Jquery JS -->
    <script src="./plugins/jquery/jquery-3.6.0.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="./plugins/bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Polyfill -->
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>

    <!-- Stripe API -->
    <script src="https://js.stripe.com/v3/"></script>

    <!-- Charge JS -->
    <script src="./dist/js/charge,js"></script>

    <!-- OwlCarousel JS -->
    <script src="./plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- SweetAlert2 JS -->
    <script src="./plugins/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- Box Icons JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.1/dist/boxicons.min.js" integrity="sha512-baN0M8ppsz0FvHb9my1X0eQ0eeEXjs0EI+QZvU8NkN072R3DF+hnpO80RKd3q+p/5B4jrD8C3t18B03T7+DI7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Main JS -->
    <script src="./dist/js/main.js"></script>

    <script>
        function moreText() {
            const readMoreBtn = document.getElementById("moreBtn");
            const textContainer = document.getElementById("text-container");

            textContainer.classList.toggle("show-more");
            if (readMoreBtn.innerText === "More") {
                readMoreBtn.innerText = "Less";
            } else {
                readMoreBtn.innerText = "More";
            }
        };
    </script>

    <script>
        function TransaksiValid() {
            var nominal = document.forms["form-transaksi"]["nominal"].value;
            // var metode = document.forms["form-transaksi"]["pembayaran"].value;
            var email = document.forms["form-transaksi"]["email"].value;
            // var phone = document.forms["form-transaksi"]["phone"].value;

            const Toast = Swal.mixin({
                toast: false,
                position: 'center',
                showConfirmButton: false,
                timer: 2000,
                allowOutsideClick: true,
                padding: '.2em',
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            // Nominal Validation
            if (nominal == "") {
                // alert("Mohon memilih Nominal Voucher terlebih dahulu!");
                Toast.fire({
                    icon: 'warning',
                    titleText: 'Harap pilih item terlebih dahulu!',
                    showClass: {
                        popup: 'animate__animated animate__flipInX'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__flipOutX'
                    }
                })
                return false;
            }

            // Metode Validation
            // if (metode == "") {
            //     // alert("Mohon memilih Metode Pembayaran!");
            //     Toast.fire({
            //         icon: 'warning',
            //         titleText: 'Harap pilih metode pembayaran!',
            //         showClass: {
            //             popup: 'animate__animated animate__flipInX'
            //         },
            //         hideClass: {
            //             popup: 'animate__animated animate__flipOutX'
            //         }
            //     })
            //     return false;
            // }

            // Email Validaiton
            var filter = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if (email == "") {
                // alert("Mohon menginputkan Alamat Email!");
                Toast.fire({
                    icon: 'warning',
                    titleText: 'Harap mengisi alamat email!',
                    showClass: {
                        popup: 'animate__animated animate__flipInX'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__flipOutX'
                    }
                })
                return false;
            }

            if (!filter.test(email)) {
                Toast.fire({
                    icon: 'warning',
                    titleText: 'Alamat Email tidak valid!',
                    showClass: {
                        popup: 'animate__animated animate__flipInX'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__flipOutX'
                    }
                })
                return false;
            }

            // Telefon Validation
            // if (phone == "") {
            //     // alert("Mohon menginputkan Nomor Whatsapp!");
            //     Toast.fire({
            //         icon: 'warning',
            //         titleText: 'Harap mengisi nomor Whatsapp!',
            //         showClass: {
            //             popup: 'animate__animated animate__flipInX'
            //         },
            //         hideClass: {
            //             popup: 'animate__animated animate__flipOutX'
            //         }
            //     })
            //     return false;
            // }
            // if (isNaN(phone)) {
            //     // alert("Nomor Whatsapp tidak Valid!");
            //     Toast.fire({
            //         icon: 'warning',
            //         titleText: 'Nomor Whatsapp tidak valid!',
            //         showClass: {
            //             popup: 'animate__animated animate__flipInX'
            //         },
            //         hideClass: {
            //             popup: 'animate__animated animate__flipOutX'
            //         }
            //     })
            //     return false;
            // }
        };
    </script>
</body>

</html>