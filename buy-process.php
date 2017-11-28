<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "gameonline";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$appID = $_GET['appID'];
	$userID = $_GET['userID'];
	$email = $_POST['email'];
	$nim = $_POST['nim'];
	$jurusan = $_POST['jurusan'];

	$sql = "INSERT INTO transaksi (id, appid, nim, jurusan) VALUES ('$userID', '$appID', '$nim', '$jurusan')";

	if(mysqli_query($conn, $sql)){
		// echo "<script type='text/javascript'>alert('failed!')</script>";
    	// echo  "<script>alert('Thank you for your Purchasing!');</script>";
    	header("Location: index.php");
		exit();
	}else{

	}
?>