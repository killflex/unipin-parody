<?php
// session_start();
include '../koneksi.php';

// if (isset($_POST['edituser'])) {
//     $id_admin = $_POST['id_customer'];
//     $email = $_POST['email'];

//     $sqlchang = "UPDATE customers SET email='$email' WHERE id_customer = '$id_customer'";
//     $editcustomer = mysqli_query($koneksi, $sqlchang);

//     if ($editcustomer) {
//         echo "<script type=\"text/javascript\"> 
//                     alert('Berhasil mengedit data!'); 
//                     window.location=\"customer.php\";
//                 </script>";
//     } else {
//         echo "<script type=\"text/javascript\"> 
//                 alert('Gagal mengedit data!'); 
//                 window.location=\"customer.php\";
//             </script>";
//     }
// };

// if (isset($_POST['hapuscustomer'])) {
//     $id_customer = $_GET['id'];

//     $sqlh = "DELETE FROM `customers` WHERE id_customer = $id_customer";
//     $hapuscustomer = mysqli_query($koneksi, $sqlh);

//     if ($hapuscustomer) {
//         echo "<script type=\"text/javascript\"> 
//                         alert('Berhasil menghapus data!'); 
//                         window.location=\"customer.php\";
//                     </script>";
//     } else {
//         echo "<script type=\"text/javascript\"> 
//                     alert('Gagal menghapus data!'); 
//                     window.location=\"customer.php\";
//                 </script>";
//     }
// };

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UniPin - Kelola Staff</title>

    <?php include '../docs/head.html'; ?>

    <!-- FavIcon -->
    <link rel="shortcut icon" sizes="196x196" href="https://cdn.unipin.com/images/unipin.png" />
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn.unipin.com/img/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="https://cdn.unipin.com/img/favicon.ico" />
    <!-- <link rel="shortcut icon" href="dist/img/brand.png"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../plugins/bootstrap-5.1.3/dist/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">


    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">

    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

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
                            <li><a href="index.php"><span>Dashboard</span></a></li>
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
                            <li class="active"><a href="customer.php"><span>Kelola Customer</span></a></li>
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
                        <div class="nav-btn float-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                </div>
            </div>
            <!-- header area end -->

            <!-- page title area end -->
            <div class="main-content-inner">

                <!-- market value area start -->
                <div class="main-content-inner">
                    <div class="row mt-5 mb-5">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h4 class="d-inline">Daftar Customer</h4>
                                    </div>
                                    <div class="data-tables datatable-dark">
                                        <table id="dataTable3" class="display" style="width:100%">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>ID Customer</th>
                                                    <th>Email</th>
                                                    <th>Tanggal</th>
                                                    <!-- <th>Aksi</th> -->
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $brgs = mysqli_query($koneksi, "SELECT * FROM customers ORDER BY id_customer");
                                                $no = 1;
                                                while ($p = mysqli_fetch_array($brgs)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $p['id_customer'] ?></td>
                                                        <td><?php echo $p['email'] ?></td>
                                                        <td><?php echo $p['created_at'] ?></td>
                                                        <!-- <td>
                                                            <a href="javascript:void(0);" id="#edit" class="edit btn btn-primary btn-xs" data-id="<?= $p['id_customer'] ?>" data-email="<?= $p['email'] ?>"><i class="fas fa-edit"></i></a>

                                                            <a href="action.php?act=hapus&id=<?= $p['id_customer'] ?>" name="hapuscustomer" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
                                                        </td> -->
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->

        <!-- <footer>
    <div class="footer-area">
        <p>By Richard's Lab</p>
    </div>
    </footer> -->

    </div>
    <!-- page container area end -->

    <div id="editModal" class="modal fade">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Customer</h4>
                </div>
                <form method="POST" action="" name="">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <input name="id_customer" type="hidden" class="form-control" id="id_customer">

                                <div class="form-group mb-4">
                                    <label>Email</label>
                                    <input name="email" type="text" class="form-control" id="email">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm col-sm-2 btn-default" data-dismiss="modal">Batal</button>
                        <input name="edituser" type="submit" class="btn btn-sm col-sm-2 btn-primary" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#dataTable3').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
    </script>

    <!-- jquery latest version -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>

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