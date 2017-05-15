<?php
	if (isset($_POST['btn-login'])){
		session_start();
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
		$_SESSION['email'] = $email;
		$_SESSION['pwd'] = $pwd;
		header('Location: ../cars.php');
	}
?>