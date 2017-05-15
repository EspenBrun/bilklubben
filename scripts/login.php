<?php
	if (isset($_POST['btn-login'])){
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        $con = mysqli_connect("mysql.stud.iie.ntnu.no", "espenkb", "nN3MZOCh"); 
        // input needs to be sanitized!
        $sql = "SELECT * FROM espenkb.users WHERE email = '$email' AND pwd = '$pwd'";
        $res = mysqli_query($con, $sql); 

        if(mysqli_num_rows($res) == 1) {
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['pwd'] = $pwd;
			header('Location: ../cars.php');
		} else {
			echo "<h3>Beklager, feil brukernavn og/eller passord</h3>";
			echo "<h3><a href='../index.php'>Tilbake</a></h3>";
		}		
	} else {
		echo "<h3>Noe gikk galt ånei ånei epost og passord ikke mottat</h3>";
		echo "<h3><a></a href='../index.php'>Tilbake</h3>";
	}
?>