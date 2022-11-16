<?php
//CREATE

	session_start();
	$conn = mysqli_connect('localhost', 'root', '', '');

	// initialize variables
	
	$address = "";
    $phone_number = "";
    $pickup_date = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$address = $_POST['address'];
		$phone_number = $_POST['phone_number'];
        $pickup_date = $_POST['pickup_date'];

		mysqli_query($db, "INSERT INTO info (address , phone_number, pickup_date) VALUES ('$address', '$phone_number',   '$pickup_date ')"); 
		$_SESSION['message'] = "Details saved"; 
		header('location: detail.php');
	}

//UPDATE

 
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $pickup_date = $_POST['pickup_date'];

	mysqli_query($db, "UPDATE info SET address='$address', phone_number = '$phone_number', pickup_date = '$pickup_date' WHERE id=$id");
	$_SESSION['message'] = "Details updated!"; 
	header('location: detail.php');
}

//DELETE
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($db, "DELETE FROM _ WHERE id=$id");
	$_SESSION['message'] = "details deleted!"; 
	header('location: index.php');
}

?>