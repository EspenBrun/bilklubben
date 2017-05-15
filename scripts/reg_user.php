<?php
	if (isset($_POST['btn-reg'])){
        $first = $_POST['first'];
        $last = $_POST['last'];
        $adress = $_POST['adress'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

		// connect
		$con = mysqli_connect("mysql.stud.iie.ntnu.no", "espenkb", "nN3MZOCh");          
		mysqli_select_db($con, "phpbok"); 

		// sql query
		$sql = "INSERT INTO espenkb.users";
		$sql .= " (first, last, adress, zip, city, phone, email, pwd)";
		$sql .= " VALUES ";
		$sql .= " ('$first', '$last', '$adress', '$zip', '$city', '$phone', '$email', '$pwd')";
		echo $sql;
		$resultat = mysqli_query($con, $sql); 

		//close
		mysqli_close($con);
	}
?>