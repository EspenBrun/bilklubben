<?php
	if (isset($_POST['btn-login'])){
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        echo $email;

		// if ($resultat) {
		// 	$_SESSION['email'] = $email;
		// 	$_SESSION['pwd'] = $pwd;
		// 	header('Location: ../cars.php');
		// }
	}
?>