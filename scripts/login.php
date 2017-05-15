<?php
	if (isset($_POST['btn-login'])){
		session_start();
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        $con = mysqli_connect("mysql.stud.iie.ntnu.no", "espenkb", "nN3MZOCh"); 
        $sql = "SELECT * FROM espenkb.users WHERE email = '$email' AND pwd = '$pwd'";
        $res = mysqli_query($con, $sql); 

        if(mysqli_num_rows($res) == 1) {
			$row = mysqli_fetch_assoc($res);
			print "<h3>Velkommen, " . $row['email'] . "</h3>";
		} else {
			print "Beklager, feil brukernavn og/eller passord";
		}

		print "<p>Følgende ble utført:</p>";
		print "<p style='font-family: monospace'>" . $sql . "</p>";

		// $_SESSION['email'] = $email;
		// $_SESSION['pwd'] = $pwd;
		// header('Location: ../cars.php');
	} else print "Noe gikk galt ånei ånei epost og passord ikke mottat";

	// if(isset($_POST['brukernavn']) && isset($_POST['passord'])) {

	// 	$strBruker = $_POST['brukernavn'];
	// 	$strPass = $_POST['passord'];

	// 	$conn = mysqli_connect('localhost', "dbbruker", "dbpass");
	// 	mysqli_select_db($conn, "mindb");
	// 	$sql = "SELECT * FROM brukere WHERE brukernavn = '$strBruker' AND passord = '$strPass'";
	// 	$result = mysqli_query($sql);

	// 	if(mysqli_num_rows($resultat) == 1) {
	// 		$rad = mysqli_fetch_assoc($resultat);
	// 		print "<h3>Velkommen, " . $rad['brukernavn'] . "</h3>";
	// 	} else {
	// 		print "Beklager, feil brukernavn og/eller passord";
	// 	}

	// 	print "<p>Følgende ble utført:</p>";
	// 	print "<p style='font-family: monospace'>" . $sql . "</p>";
	 
	// } else print "Noe er galt, har ikke mottatt brukernavn og passord";

?>