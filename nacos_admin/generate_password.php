<?php
include 'includes/session.php';

if (isset($_POST['generate'])) {
	$matric = $_POST['matric'];

	$sql = "SELECT * FROM voters WHERE voters_id = $matric";
	$query = $conn->query($sql);
	if ($query->num_rows < 1) {
		$_SESSION['error'] = 'Matriculation number does not exist in the database';
	} else {
		$row = $query->fetch_assoc();

		// Generate Password
		$set = '0123456789';
		$pin_generate = substr(str_shuffle($set), 0, 5);
		$password = password_hash($pin_generate, PASSWORD_DEFAULT);

		$sql1 = "UPDATE voters SET password = '$password' WHERE voters_id = '$matric'";
		if ($conn->query($sql1)) {
			$_SESSION['success'] = 'Password Generated successfully: <strong><h1>' . $pin_generate . '</h1></strong>';
		} else {
			$_SESSION['error'] = $conn->error;
		}
	}
}

header('location: password');
