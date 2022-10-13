<?php
    include '../koneksi.php';

    // ADMIN ACTION'S
    if (isset($_POST['adduser'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $timestamp = date('Y-m-d G:i:s');

        $sqlt = "INSERT INTO users VALUES ('','$nama','$username','$password', '$timestamp')";
        $tambahuser = mysqli_query($koneksi, $sqlt);

        if ($tambahuser) {
            // echo "<div class='alert alert-success'>Berhasil menambahkan staff baru!</div>
            //     <meta http-equiv='refresh' content='1; url= admin.php'/>  ";
            echo "<script type=\"text/javascript\"> 
                        alert('Berhasil menambahkan staff baru!'); 
                        window.location=\"admin.php\";
                    </script>";
        } else {
            // echo "<div class='alert alert-warning'>Gagal menambahkan staff baru!</div>
            // <meta http-equiv='refresh' content='1; url= admin.php'/> ";

            echo "<script type=\"text/javascript\"> 
                alert('Gagal menambahkan staff baru!'); 
                window.location=\"admin.php\";
            </script>";
        }
    }elseif (isset($_POST['edituser'])) {
        $id_admin = $_POST['id_admin'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sqlchang = "UPDATE users SET name='$nama', username='$username', password='$password' WHERE id_admin = '$id_admin'";
        $edituser = mysqli_query($koneksi, $sqlchang);

        if ($edituser) {
            echo "<script type=\"text/javascript\"> 
                    alert('Berhasil mengedit data!'); 
                    window.location=\"admin.php\";
                </script>";
        }else {
        echo "<script type=\"text/javascript\"> 
                alert('Gagal mengedit data!'); 
                window.location=\"admin.php\";
            </script>";
        }
    }

    if ($_GET['act']=='hapus') {
        $id_admin = $_GET['id'];

        $sqlh = "DELETE FROM `users` WHERE id_admin = $id_admin";
        $hapususer = mysqli_query($koneksi, $sqlh);

        if ($hapususer) {
            echo "<script type=\"text/javascript\"> 
                    alert('Berhasil menghapus data!'); 
                    window.location=\"admin.php\";
                </script>";
        } else {
            echo "<script type=\"text/javascript\"> 
                alert('Gagal menghapus data!'); 
                window.location=\"admin.php\";
            </script>";
        }
    };


    // CUSTOMER ACTION'S
    // if (isset($_POST['edituser'])) {
    //     $id_admin = $_POST['id_customer'];
    //     $email = $_POST['email'];

    //     $sqlchange = "UPDATE customers SET email='$email' WHERE id_customer = '$id_customer'";
    //     $editcustomer = mysqli_query($koneksi, $sqlchange);

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

    if ($_GET['act'] == 'hapus') {
        $id_customer = $_GET['id'];

        $sqlha = "DELETE FROM `customers` WHERE id_customer = $id_customer";
        $hapuscustomer = mysqli_query($koneksi, $sqlha);

        if ($hapuscustomer) {
            echo "<script type=\"text/javascript\"> 
                            alert('Berhasil menghapus data!'); 
                            window.location=\"customer.php\";
                        </script>";
        } else {
            echo "<script type=\"text/javascript\"> 
                        alert('Gagal menghapus data!'); 
                        window.location=\"customer.php\";
                    </script>";
        }
    };


    // MANAGEORDER ACTION'S
