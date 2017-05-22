<!-- Prosjekt Webutvikling 2 -->
<!-- Bilklubben AS  -->
<!-- Espen Kirkesæther Brun -->

<?php
    session_start();
    if (!isset($_SESSION['email']) || !isset($_SESSION['pwd']) || !isset($_POST)) {
	    header('Location: ./index.php');
    }
    elseif (isset($_SESSION['email']) && isset($_SESSION['pwd']) && isset($_POST)) {
    	$email = $_SESSION['email'];
    	// jquery form validation need unique names on input, so cant easily acess the right key here
    	// workaround: make $_POST an array and just assing the values by index instead of key
		$post = array_values($_POST);
        $date_from = $post[0];
        $date_to = $post[1];
    	$car_id = $post[2];
        $brand = $post[3];
        $model = $post[4];
        $days = $post[5];
        $points_car = $post[6];
        $points_user = $post[7];
        $first = $post[8];
        $img = $post[9];

        $points_charged = $points_car * $days;
        $points_left = $points_user - $points_charged;
        $made_on = date("Y-m-d"); // YYYY-MM-DD
        $res_reservation = null;
        $sql_user = null;

        if ($points_left < 0) {
        	echo "Du har ikke nok poeng for denne bestillingen.";
        }
        else {

	        $con = mysqli_connect("mysql.stud.iie.ntnu.no", "espenkb", "nN3MZOCh");          

			// sql for reservation
			$sql_reservation = "INSERT INTO espenkb.reservations";
			$sql_reservation .= " (email, car_id, made_on, date_from, date_to, points_charged)";
			$sql_reservation .= " VALUES ";
			$sql_reservation .= " ('$email', '$car_id', '$made_on', '$date_from', '$date_to', '$points_charged')";

			$res_reservation = mysqli_query($con, $sql_reservation);
			
			$sql_user = "UPDATE espenkb.users SET points = '$points_left' WHERE email = '$email'";

			$res_user = mysqli_query($con, $sql_user);
			//close connection
			mysqli_close($con);
		
			if (!$res_reservation && !$sql_user) {
		        echo "Noe gikk galt";
			} else {  ?>

<!-- The main html code is only loaded if order is successful -->
<!DOCTYPE html>
<html lang="no">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- bootstrap Latest compiled and minified CSS -->
		<link rel="stylesheet" href="./styles/bootstrap.min.css">
		<link rel="stylesheet" href="./styles/sticky-footer-navbar.css">
		<link rel="stylesheet" href="./styles/bootstrap-datetimepicker.css" />
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
					<h2>Takk for din bestilling, <?php echo $first;?></h2>
					<hr/>
					<h3>Du har bestilt</h3>
					<div class="jumbotron col-xs-12 col-sm-6">
						<p><b><?php echo $brand . " " . $model . ".";?></b></p>
						<p>Fra <?php echo $date_from?> til <?php echo $date_to;?>.</p>
						<p>Du har brukt <?php echo $points_charged;?>.</p>
						<p>Du har igjen <?php echo $points_left;?> poeng</p>
					</div>
					<div class="col-xs-12 col-sm-6">
						<img src="./res/<?php echo $img;?>"/>
					</div>
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
		<script type="text/javascript" language="javascript" src="order.js"></script>
	</body>
</html>	





		<?php }
		}
    }
?>


