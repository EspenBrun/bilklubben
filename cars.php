<!-- Prosjekt Webutvikling 2 -->
<!-- Bilklubben AS  -->
<!-- Espen Kirkesæther Brun -->

<?php
    session_start();
    if (isset($_SESSION['email']) && isset($_SESSION['pwd'])) {
		$con = mysqli_connect("mysql.stud.iie.ntnu.no", "espenkb", "nN3MZOCh");          
	    $sql = "SELECT * FROM espenkb.cars";
	    $res = mysqli_query($con, $sql); 
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
		<div class="container-fluid container-main">

			<div class="row">
				<div class="col-xs-12 col-sm-4 col-sm-offset-4">
					<h2 class="text-center">Bilsiden</h2>
					<?php
					    while ( $row = mysqli_fetch_array($res) ) { 
					        $brand = $row['brand'];
					        $model = $row['model'];
					        $type = $row['type'];
					        $seats = $row['seats'];
					        $baggage = $row['baggage'];
					        $extras = $row['extras'];
					        $points = $row['points'];
					        $img1 = $row['img1'];
					        $img2 = $row['img2'];
					        $img3 = $row['img3']; ?>

					        <p><?php echo $brand . $model; ?></p>
					        <?php
					    }  
					    mysqli_close($con);
				    ?>
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
		<script type="text/javascript" language="javascript" src="cars.js"></script>
	</body>
</html>	
