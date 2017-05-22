<?php
	if (isset($_POST['btn-order'])){
        $car_id = $_POST['car-id'];
        $date_from = $_POST['date_from'];
        $date_to = $_POST['date_to'];
        $days = $_POST['days'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $points_car = $_POST['points-car'];
        $points_user = $_POST['points-user'];
        $points_charged = $points_car * $days;
        $points_left = $points_user - $points_charged;

        $made_on = date("Y-m-d"); // YYYY-MM-DD

        session_start();
        if ($points_left < 0) {
        	echo "Dine $points_user poeng er ikke nok til å dekke utgiftene på " . $points_car * $days . " poeng.";
        }
	    else if (isset($_SESSION['email']) && isset($_SESSION['pwd'])) {
	    	// connect
	    	$email = $_SESSION['email'];
			$con = mysqli_connect("mysql.stud.iie.ntnu.no", "espenkb", "nN3MZOCh");          

			// sql for reservation
			$sql_reservation = "INSERT INTO espenkb.reservations";
			$sql_reservation .= " (email, car_id, made_on, date_from, date_to, points_charged)";
			$sql_reservation .= " VALUES ";
			$sql_reservation .= " ('$email', '$car_id', '$made_on', '$date_from', '$date_to', '$points_charged')";

			$res_reservation = mysqli_query($con, $sql_reservation);
			
			$sql_user = "UPDATE espenkb.users SET points = '$points_left' WHERE email = '$email'";

			$res_user = mysqli_query($con, $sql_user);
			echo $sql_user;

			//close connection
			mysqli_close($con);

			if ($res_reservation && $sql_user) {
		        echo "Takk for din bestilling";
			} else echo "Noe gikk galt.";
	    } else {
	    header('Location: ./index.php');
	    }
	} else {
	    header('Location: ./index.php');
    }
?>