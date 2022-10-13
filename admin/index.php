<?php
// session_start();
include '../koneksi.php';

$itungcust = mysqli_query($koneksi, "SELECT COUNT(id_admin) AS jumlahcust FROM users");
$itungcust2 = mysqli_fetch_assoc($itungcust);
$itungcust3 = $itungcust2['jumlahcust'];

$itungorder = mysqli_query($koneksi, "SELECT COUNT(id_customer) AS jumlahcustomer FROM customers");
$itungorder2 = mysqli_fetch_assoc($itungorder);
$itungorder3 = $itungorder2['jumlahcustomer'];

$itungtrans = mysqli_query($koneksi, "SELECT COUNT(id_transaction) AS jumlahtrans FROM transactions");
$itungtrans2 = mysqli_fetch_assoc($itungtrans);
$itungtrans3 = $itungtrans2['jumlahtrans'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UniPin - Dashboard</title>

    <!-- FavIcon -->
    <link rel="shortcut icon" sizes="196x196" href="https://cdn.unipin.com/images/unipin.png" />
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn.unipin.com/img/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="https://cdn.unipin.com/img/favicon.ico" />
    <!-- <link rel="shortcut icon" href="dist/img/brand.png"> -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">

    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">


</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active"><a href="index.php"><span>Dashboard</span></a></li>
                            <li><a href="../"><span>Kembali ke Toko</span></a></li>
                            <li>
                                <a href="manageorder.php"><i class="ti-dashboard"></i><span>Kelola Pesanan</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Kelola Toko</span></a>
                                <ul class="collapse">
                                    <!-- <li><a href="kategori.php">Kategori</a></li> -->
                                    <li><a href="produk.php">Produk</a></li>
                                </ul>
                            </li>
                            <li><a href="customer.php"><span>Kelola Customer</span></a></li>
                            <li><a href="admin.php"><span>Kelola Staff</span></a></li>
                            <li>
                                <a href="../logout.php"><span>Logout</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>


            <!-- header area end -->
            <?php
            /*
				$periksa_bahan=mysqli_query($conn,"select * from stock_brg where stock <10");
				while($p=mysqli_fetch_array($periksa_bahan)){	
					if($p['stock']>=1){	
						?>
            <script>
                $(document).ready(function () {
                    $('#pesan_sedia').css("color", "white");
                    $('#pesan_sedia').append("<i class='ti-flag'></i>");
                });
            </script>
            <?php
						echo "<div class='alert alert-danger alert-dismissible fade show'><button type='button' class='close' data-dismiss='alert'>&times;</button>Stok  <strong><u>".$p['nama']. "</u> <u>".($p['jenis'])."</u></strong> yang tersisa kurang dari 10</div>";		
					}
				}
				
				*/
            ?>


            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-user"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Company Staff</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?= $itungcust3 ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-book"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Customer</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?= $itungorder3 ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report mb-xs-20">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-link"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Pesanan Terkonfirmasi</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?= $itungtrans3 ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- overview area end -->
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h2>Selamat Datang Admin! <?php /* echo $_SESSION['name'] */ ?></h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <!-- <p class="">Anda masuk sebagai <strong><?php /* echo $_SESSION['name'] */ ?></strong></p> -->
                                    <!-- <br> -->
                                    <p>Pada halaman <b>Admin</b>, <br>Anda dapat menambah mengelola produk,
                                        mengelola customer dan user staff, melihat detail konfirmasi pembayaran, dan lain sebagainya. Terima kasih atas kerja keras anda!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->



        <!-- footer area start-->
        <!-- <footer>
            <div class="footer-area">
                <p>by Ferry Hasan</p>
            </div>
        </footer> -->
        <!-- footer area end-->

    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>

    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>

    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>

    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>

    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>