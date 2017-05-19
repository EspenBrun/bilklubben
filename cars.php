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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
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
					<h2 class="text-center">Bilsiden</h2>
					<hr/>
					<?php
					    while ( $row = mysqli_fetch_array($res) ) {
					    	$id = $row['id'];
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

							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<div id="myCarousel<?php echo $id;?>" class="carousel slide" data-ride="carousel">
									<!-- Carousel indicators -->
										<ol class="carousel-indicators">
											<li data-target="#myCarousel<?php echo $id;?>" data-slide-to="0" class="active"></li>
											<li data-target="#myCarousel<?php echo $id;?>" data-slide-to="1" class="active"></li>
											<li data-target="#myCarousel<?php echo $id;?>" data-slide-to="2" class="active"></li>
										</ol>
										<!-- Wrapper for slides -->
										<div class="carousel-inner">
											<!-- Slides -->
											<div class="item active">
												<img src="./res/<?php echo $img1;?>" alt="Bilbilde 1">
											</div>
											<div class="item">
												<img src="./res/<?php echo $img2;?>" alt="Bilbilde 2">
											</div>
											<div class="item">
												<img src="./res/<?php echo $img3;?>" alt="Bilbilde 3">
											</div>
										</div>
										<!-- Left and right controls -->
										<a class="left carousel-control" href="#myCarousel<?php echo $id;?>" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left""></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="right carousel-control" href="#myCarousel<?php echo $id;?>" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 jumbotron cabin-list-description match-parent">
									<h3><?php echo $brand . " " . $model;?></h3>
									<p><?php echo $type;?></p>
									<p><?php echo $seats;?> seter</p>
									<p>Plass til <?php echo $baggage;?> kofferter</p>
									<p>Ekstrautstyr: <?php echo $extras;?></p>
									<h4><?php echo $points;?></h4>
									
								    <div class='col-md-5'>
								        <div class="form-group">
								            <div class='input-group date' id='datetimepicker6'>
								                <input type='text' class="form-control" />
								                <span class="input-group-addon">
								                    <span class="glyphicon glyphicon-calendar"></span>
								                </span>
								            </div>
								        </div>
								    </div>
								    <div class='col-md-5'>
								        <div class="form-group">
								            <div class='input-group date' id='datetimepicker7'>
								                <input type='text' class="form-control" />
								                <span class="input-group-addon">
								                    <span class="glyphicon glyphicon-calendar"></span>
								                </span>
								            </div>
								        </div>
								    </div>
								</div>
							</div>
							<hr/> 
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
	    <!-- Moment.js. Date time formatting, required for the bootstrap calendar -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
		<!-- bootstrap Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- bootstrap-datetimepicker -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
		<!-- page logic -->
		<script type="text/javascript" language="javascript" src="cars.js"></script>
	</body>
</html>	
