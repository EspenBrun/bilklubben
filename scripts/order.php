<?php
	if (isset($_POST['btn-order'])){
        $from = $_POST['from'];
        $to = $_POST['to'];
        echo $from . " " . $to;


		// // connect
		// $con = mysqli_connect("mysql.stud.iie.ntnu.no", "espenkb", "nN3MZOCh");          

		// // sql query
		// $sql = "INSERT INTO espenkb.users";
		// $sql .= " (first, last, adress, zip, city, phone, email, pwd)";
		// $sql .= " VALUES ";
		// $sql .= " ('$first', '$last', '$adress', '$zip', '$city', '$phone', '$email', '$pwd')";

		// $res = mysqli_query($con, $sql); 

		// //close
		// mysqli_close($con);

		// if ($res) {
		// 	session_start();
		// 	$_SESSION['email'] = $email;
		// 	$_SESSION['pwd'] = $pwd;
		// 	header('Location: ../cars.php');
		// } else echo "Noe gikk galt.";
	}
?>