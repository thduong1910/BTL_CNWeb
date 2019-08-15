<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="js/verify.js"></script> 
	<title></title>
</head>
<body>

	<header>
		<?php include("header.php"); ?>
	</header>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-3" id="left">
					<div class="row text-center" id="menu">
						<div class="col-12">
							<a href="#"><h4><i class="fa fa-home"></i>Trang Chủ</h4></a>
						</div>
					</div>
					<div class="qc">
						<a href="#"><img src="images/qc.gif" class="mx-auto d-block"></a>
					</div>
				</div>
				<div class="col-9">
					<div class="row" id="login_page">
						<div class="col-12">
							<div id="login">
	        					<h3 class="text-center text-black pt-5">Đăng nhập</h3>
	        					<div class="container">
	            					<div id="login-row" class="row justify-content-center align-items-center">
	                					<div id="login-column" class="col-md-6">
	                    					<div id="login-box" class="col-md-12">
	                        					<form id="login-form" class="form" action="" method="post">
	                            					<h3 class="text-center text-info">Login</h3>
	                            					<div class="form-group">
	                               						<label for="username" class="text-info">Email:</label><br>
	                                					<input type="text" name="username" id="username" class="form-control">
	                            					</div>
	                            					<div class="form-group">
	                                					<label for="password" class="text-info">Password:</label><br>
	                                					<input type="text" name="password" id="password" class="form-control">
	                            					</div>
	                            					<div class="form-group">
	                                					<label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
	                                					<input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
	                            					</div>
	                            					<div id="register-link" class="text-right">
	                                					<a href="#" class="text-info">Register here</a>
	                            					</div>
	                        					</form>
	                    					</div>
	                					</div>
	            					</div>
	        					</div>
	    					</div>
	    				</div>
					</div>
				</div>
			</div>
		</div>
	</main>



	<footer style="margin-top: 20px">
		<?php include("footer.php"); ?>
	</footer>

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</body>
</html>