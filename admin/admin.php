<?php
include '../koneksi.php';

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
                            <li><a href="customer.php"><span>Kelola Customer</span></a></li>
                            <li class="active"><a href="admin.php"><span>Kelola Staff</span></a></li>
                            <li>
                                <a href="../logout.php"><span>Logout</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->

        <div class="main-content">
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

            <div class="main-content-inner">
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="d-inline">Daftar Staff</h4>
                                    <button data-toggle="modal" data-target="#myModal" class="d-inline btn btn-primary btn-sm"><i class="fas fa-plus"></i></button>
                                </div>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="display" style="width:100%">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th style="width:5%">No.</th>
                                                <th>Nama</th>
                                                <!-- <th>Email</th> -->
                                                <th>Username</th>
                                                <!-- <th>Password</th> -->
                                                <!-- <th>Phone</th>
                                                <th>Role</th> -->
                                                <th>Bergabung</th>
                                                <th style="width:12%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $admin = mysqli_query($koneksi, "SELECT * FROM users ORDER BY id_admin ASC");
                                            $no = 1;
                                            while ($gm = mysqli_fetch_array($admin)) :
                                            ?>

                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $gm['name'] ?></td>
                                                    <!-- <td><?= $gm['email'] ?></td> -->
                                                    <td><?= $gm['username'] ?></td>
                                                    <!-- <td><?= $gm['phone'] ?></td> -->
                                                    <!-- <td><?= $gm['role'] ?></td> -->
                                                    <td><?= $gm['created_at'] ?></td>
                                                    <td>
                                                        <a href="javascript:void(0);" id="#edit" class="edit btn btn-primary btn-xs" data-id="<?= $gm['id_admin'] ?>" data-nama="<?= $gm['name'] ?>" data-username="<?= $gm['username'] ?>" data-password="<?= $gm['password'] ?>"><i class="fas fa-edit"></i></a>
                                                        <!-- <a href="action.php?id=<?= $gm['id_admin'] ?>" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i></a> -->

                                                        <a href="action.php?act=hapus&id=<?= $gm['id_admin'] ?>" name="hapusadmin" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>

                                            <?php
                                            endwhile;
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


    <!-- footer area start-->
    <!-- <footer>
        <div class="footer-area">
            <p>By Ferry Hasan</p>
        </div>
    </footer> -->
    <!-- footer area end-->

    </div>

    <!-- Modal Input Users -->
    <?php include './docs/modal_user.php'; ?>
    <!-- //Modal Input Users -->

    <!-- Modal Edit Users -->
    <?php include './docs/modal_edit.php'; ?>
    <!-- //Modal Edit Users -->


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
    <script src="../plugins/jquery/jquery-3.6.0.js"></script>

    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- OwlCarousel JS -->
    <script src="./plugins/owlcarousel/owl.carousel.min.js"></script>

    <!--  -->
    <script src="assets/js/metisMenu.min.js"></script>

    <!--  -->
    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <!--  -->
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

    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>

    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>

    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>

    <script>
        $(document).ready(function() {
            $('.edit').on('click', function() {
                $('#editModal').modal('show');

                var id = $(this).data("id");
                var nama = $(this).data("nama");
                var email = $(this).data("email");
                // var phone = $(this).data("phone");
                var username = $(this).data("username");
                // var password = $(this).data("password");
                // var role = $(this).data("role");


                $("#id_admin").val(id);
                $("#nama").val(nama);
                $("#email").val(email);
                // $("#phone").val(phone);
                $("#username").val(username);
                $("#password").val(password);
                // $("#role").val(role);
            })
        })
    </script>
</body>

</html>