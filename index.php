<!-- Prosjekt Webutvikling 2 -->
<!-- Bilklubben AS  -->
<!-- Espen Kirkesæther Brun -->
<?php
    // Start sesjon -- må komme først
    session_start();
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
		<div class="container-fluid container-main">
			
			<div class="row banner">
				<div class="col-xs-12">
		   			<h1 class="banner-txt text-center">Velkommen til Bilklubben AS</h1>
			    </div>
			</div>

			<div class="row container-registration">
				<div class="col-xs-12 col-sm-4 col-sm-offset-4">
					<h2 class="text-center">Bli medlem</h2>
					<form 
						action="./scripts/reg_user.php" 
						method="post" 
						id="form-reg" 
						class="form-horizontal form-registration">
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="first-name">Fornavn:</label>
					    <div class="col-sm-10">
					      <input type="text" name="first" class="form-control" placeholder="Fornavn">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="last-name">Etternavn:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="last" placeholder="Etternavn">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="adress">Adresse:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="adress" placeholder="Adresse">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="zip">Postnr:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="zip" placeholder="Postnr">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="city">Poststed:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="city" placeholder="Poststed">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="phone">Telefonr:</label>
					    <div class="col-sm-10">
					      <input type="number" class="form-control" name="phone" placeholder="Telefonnr">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="email">Epost:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="email" placeholder="Epost">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="pwd">Passord:</label>
					    <div class="col-sm-10"> 
					      <input type="password" class="form-control" name="pwd" placeholder="Passord">
					    </div>
					  </div>
					  <div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					      <div class="checkbox">
					        <label><input type="checkbox"> Remember me</label>
					      </div>
					    </div>
					  </div>
					  <div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" form="form-reg" name="btn-reg" class="btn btn-primary btn-block">Submit</button>
					    </div>
					  </div>
					</form>
					<div class="col-sm-offset-2 col-sm-10 text-center">
						<p><a class="open-login-modal" href="#">Allerede bruker? Log inn her</a></p>
					</div>
				</div>
			</div>
  
		    <!-- Login Modal -->
			<div class="modal fade" id="login-modal" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header" style="padding:35px 50px;">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4>Login</h4>
			        </div>
			        <div class="modal-body" style="padding:40px 50px;">
			          <form role="form">
			            <div class="form-group">
			              <label for="email">Epost</label>
			              <input type="text" class="form-control" id="email-login" placeholder="Email">
			            </div>
			            <div class="form-group">
			              <label for="psw">Passord</label>
			              <input type="text" class="form-control" id="psw-login" placeholder="Passord">
			            </div>
			            <div class="checkbox">
			              <label><input type="checkbox" value="" checked>Husk meg</label>
			            </div>
			              <button type="submit" class="btn btn-success btn-block">Log inn</button>
			          </form>
			        </div>
			        <div class="modal-footer">
			          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">Avbryt</button>
			          <p><a href="#">Bli medlem</a></p>
			          <p><a href="#">Glemt passord?</a></p>
			        </div>
			      </div>
			      
			    </div>
			</div> 
		</div>


		<footer class="footer">
      		<!-- load from js -->
	    </footer>

	    <!-- Scripts -->
		<!-- jQuery library -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	    <!-- jQuery form validation plugin and custom messages-->
	    <script src="./scripts/jquery.validate.min.js"></script>
	    <script src="./scripts/jquery.validate.msg.js"></script>
		<!-- bootstrap Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- index logic -->
		<script type="text/javascript" language="javascript" src="index.js"></script>
	</body>
</html>	
