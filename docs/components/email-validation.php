<?php

	// include '../head.html';

	$email = $_POST['email'];
	$nominal = $_POST['nominal'];
	// $metode = $_POST['pembayaran'];
	// $phone = $_POST['phone'];

	// if (empty($email)) {
	// 	echo "<script type=\"text/javascript\"> 
	// 		alert('Mohon isi Alamat Email'); 
	// 		window.location=\"../../produk.php\";
	// 	</script>";
	// 	return false;

	//alert('Invalid Email Address'); 

	// }

	if (filter_var($email, FILTER_VALIDATE_EMAIL) == false){
		echo "<script type=\"text/javascript\"> 
			
			window.location=\"../../produk.php\";
		</script>";
		return false;
		
	} else {
		echo "<script type=\"text/javascript\"> alert('Successfully Input'); </script>";
	}

echo "<h2>Your Input</h2>";
echo "$nominal <br>";
// echo "$metode <br>";
echo "$email <br>";
// echo $phone;