<?php
	if (isset($_POST['btn-order'])){
        $car_id = $_POST['car-id'];
        $date_from = $_POST['date_from'];
        $date_to = $_POST['date_to'];
        $days = $_POST['days'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $points = $_POST['points'];
        $points_charged = $points * $days;
        $made_on = date("Y-m-d"); // YYYY-MM-DD

        session_start();
	    if (isset($_SESSION['email']) && isset($_SESSION['pwd'])) {
	    	// connect
	    	$email = $_SESSION['email'];
			$con = mysqli_connect("mysql.stud.iie.ntnu.no", "espenkb", "nN3MZOCh");          

			// sql query
			$sql = "INSERT INTO espenkb.reservations";
			$sql .= " (email, car_id, made_on, date_from, date_to, points_charged)";
			$sql .= " VALUES ";
			$sql .= " ('$email', '$car_id', '$made_on', '$date_from', '$date_to', '$points_charged')";
			echo $sql;

			$res = mysqli_query($con, $sql);
			//close connection
			mysqli_close($con);

			if ($res) {
		        echo "Takk for din bestilling";
				mysqli_free_result($res);
			} else echo "Noe gikk galt.";
	    }
	} else {
	    header('Location: ./index.php');
    }
?>