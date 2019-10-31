<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'web_tech');

	// initialize variables
    $time1 = "";
    $time2 ="";
	$date = "";
    $place = "";
    $sid = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$time1 = $_POST['time1'];
        $time2 = $_POST['time2'];
        $date = $POSt['date'];
        $place = $POST['place'];

		mysqli_query($db, "INSERT INTO slot_info (time1, time2, date, place) VALUES ('$time1', '$time2', '$date', '$place')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: changeslots.php');
	}

?>