<!-- Prosjekt Webutvikling 2 -->
<!-- Bilklubben AS  -->
<!-- Espen Kirkesæther Brun -->

<?php
    session_start();
    if (isset($_SESSION['email']) && isset($_SESSION['pwd'])) {
    	$email = $_SESSION['email'];
		$con = mysqli_connect("mysql.stud.iie.ntnu.no", "espenkb", "nN3MZOCh"); 
		mysqli_set_charset($con, "utf8");
		// get the cars
	 //    $sql_cars = "SELECT * FROM espenkb.cars;";
	 //    $res_cars = mysqli_query($con, $sql_cars);
	 //    // get user points
	 //    $sql_users = "SELECT first, points FROM espenkb.users WHERE email = '$email';";
	 //    $res_users = mysqli_query($con, $sql_users);
		// $row_users = mysqli_fetch_array($res_users);
		// $points_user = $row_users['points'];
		// $name = $row_users['first'];

	    mysqli_close($con);

    }
    else {
	    header('Location: ./index.php');
    }
?>

<!DOCTYPE html>
<html lang="no">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- bootstrap Latest compiled and minified CSS -->
		<link rel="stylesheet" href="./styles/bootstrap.min.css">
		<link rel="stylesheet" href="./styles/sticky-footer-navbar.css">
		<link rel="stylesheet" type="text/css" href="./styles/styles.css">

		<title>Bilklubben AS</title>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
      		<!-- load from js -->
	    </nav>

	    <!-- content -->
		<div class="container container-main">

			<div class="row">
				<div class="col-xs-12">
					<h2>Takk, <?php echo $email;?></h2>
					
					<hr/>
					
				       
				</div>
			</div>
		</div>

		<!-- footer -->
		<footer class="footer">
      		<!-- load from js -->
	    </footer>

	    <!-- Scripts -->
		<!-- jQuery library -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<!-- bootstrap Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- page logic -->
		<script type="text/javascript" language="javascript" src="confirmation.js"></script>
	</body>
</html>	
