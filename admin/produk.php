<?php
// session_start();
include '../koneksi.php';

if (isset($_POST["addproduct"])) {
	$namaproduk = $_POST['namaproduk'];
	// $idkategori = $_POST['idkategori'];
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];
	$unduh = $_POST['unduh'];
	$website = $_POST['website'];
	$komunitas = $_POST['komunitas'];

	$nama_file = $_FILES['uploadgambar']['name'];
	$ext = pathinfo($nama_file, PATHINFO_EXTENSION);
	$random = crypt($nama_file, time());
	$ukuran_file = $_FILES['uploadgambar']['size'];
	$tipe_file = $_FILES['uploadgambar']['type'];
	$tmp_file = $_FILES['uploadgambar']['tmp_name'];
	$path = "../dist/img/" . $random . '.' . $ext;
	$pathdb = "dist/img/" . $random . '.' . $ext;


	if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {
		if ($ukuran_file <= 5000000) {
			if (move_uploaded_file($tmp_file, $path)) {

				$query = "INSERT INTO product (name, image, description, amount, unduh, website, komunitas) VALUES('$namaproduk','$pathdb','$deskripsi', '$harga', '$unduh','$website','$komunitas')";

				// Eksekusi/Jalankan query dari variabel $query
				$sql = mysqli_query($koneksi, $query);

				if ($sql) {

					echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
				} else {
					// Jika Gagal, Lakukan :
					echo "Sorry, there's a problem while submitting.";
					echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
				}
			} else {
				// Jika gambar gagal diupload, Lakukan :
				echo "Sorry, there's a problem while uploading the file.";
				echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
			}
		} else {
			// Jika ukuran file lebih dari 1MB, lakukan :
			echo "Sorry, the file size is not allowed to more than 1mb";
			echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
		}
	} else {
		// Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
		echo "Sorry, the image format should be JPG/PNG.";
		echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
	}
};

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
							<li class="active">
								<a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Kelola Toko</span></a>
								<ul class="collapse">
									<!-- <li><a href="kategori.php">Kategori</a></li> -->
									<li class="active"><a href="produk.php">Produk</a></li>
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
						<div class="nav-btn float-left">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
			</div>

			<!-- page title area end -->
			<div class="main-content-inner">

				<!-- market value area start -->
				<div class="row mt-5 mb-5">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center mb-4">
									<h4 class="d-inline">Daftar Produk</h4>
									<button data-toggle="modal" data-target="#myModal" class="d-inline btn btn-primary btn-sm"><i class="fas fa-plus"></i></button>
								</div>
								<div class="data-tables datatable-dark">
									<table id="dataTable3" class="display" style="width:100%">
										<thead class="thead-dark">
											<tr>
												<th>No.</th>
												<th>Gambar</th>
												<th>Nama Produk</th>
												<!-- <th>Kategori</th> -->
												<th>Deskripsi</th>
												<th>Harga</th>
												<th>Dibuat</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$brgs = mysqli_query($koneksi, "SELECT * FROM product ORDER BY id_product ASC");
											$no = 1;
											while ($p = mysqli_fetch_array($brgs)) {
											?>
												<tr>
													<td><?php echo $no++ ?></td>
													<td><img src="../dist/img/<?php echo $p['image'] ?>" width="50%"></td>
													<td><?php echo $p['name'] ?></td>
													<td><?php echo $p['description'] ?></td>
													<td><?php echo $p['amount'] ?></td>
													<td><?php echo $p['created_at'] ?></td>
													<td>
														<a href="javascript:void(0);" id="#edit" class="edit btn btn-primary btn-xs" data-id="<?= $brgs['id_product'] ?>" data-nama="<?= $brgs['name'] ?>" data-deskripsi="<?= $brgs['description'] ?>" data-harga="<?= $brgs['amount'] ?>" data-gambar="<?= $brgs['image'] ?>"><i class="fas fa-edit"></i></a>
														<!-- <a href="action.php?id=<?= $brgs['id_admin'] ?>" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i></a> -->

														<a href="produk.php?act=hapus&id=<?= $brgs['id_product'] ?>" name="hapusproduk" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
													</td>
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
			<!-- row area start-->
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

	<!-- modal input -->
	<div id="myModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tambah Produk</h4>
				</div>
				<div class="modal-body">
					<form action="produk.php" method="post" enctype="multipart/form-data">
						<div class="form-group mb-4">
							<label>Nama Produk</label>
							<input name="namaproduk" type="text" class="form-control" required autofocus>
						</div>
						<div class="form-group mb-4">
							<label>Deskripsi</label>
							<input name="deskripsi" type="text" class="form-control" required>
						</div>
						<div class="form-group mb-4">
							<label>Harga</label>
							<input name="harga" type="number" class="form-control" required>
						</div>
						<div class="form-group mb-4">
							<label>Unduh</label>
							<input name="unduh" type="text" class="form-control" required>
						</div>
						<div class="form-group mb-4">
							<label>Website</label>
							<input name="website" type="text" class="form-control" required>
						</div>
						<div class="form-group mb-4">
							<label>Komunitas</label>
							<input name="komunitas" type="text" class="form-control" required>
						</div>
						<div class="form-group mb-4">
							<label>Gambar</label>
							<input name="uploadgambar" type="file" class="form-control" required>
						</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input name="addproduct" type="submit" class="btn btn-primary" value="Tambah">
				</div>
				</form>
			</div>
		</div>
	</div>

	<!-- modal edit -->
	<div id="editModal" class="modal fade">
		<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit User</h4>
				</div>
				<form method="POST" action="" name="">
					<div class="modal-body">
						<div class="row">
							<div class="col-12">

								<input name="id_product" type="hidden" class="form-control" id="id_product">

								<div class="form-group mb-4">
									<label>Nama</label>
									<input name="nama" type="text" class="form-control" id="nama">
								</div>

								<!-- <div class="form-group mb-4">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control" id="email">
                        	</div> -->
								<!-- <div class="form-group mb-4">
                                <label>Phone</label>
                                <input name="phone" type="tel" class="form-control" id="phone">
                            </div> -->


								<div class="form-group mb-4">
									<label>Username</label>
									<input name="username" type="text" class="form-control" id="username">
								</div>
								<div class="form-group mb-4">
									<label>Password</label>
									<input name="password" type="password" class="form-control">
								</div>
								<!-- <div class="form-group mb-4">
                                <label>Role</label>
                                <select name="role" class="form-select form-select-sm" id="inputGroupSelect02">
                                    <option id="role">Choose...</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Keuangan">Keuangan</option>
                                </select>
                            </div> -->
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

	<!-- modernizr css -->
	<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

</body>

</html>