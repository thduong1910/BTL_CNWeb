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
					<div class="row" id="menu">
						<div class="col-12">
							<a href="index.html"><h4><i class="fa fa-home"></i>Trang Chủ</h4></a>
						</div>
						<hr class="light-100">
						<div class="col-12">
							<a href="index.html"><h4><i class="fas fa-bars"></i>Quản lý users</h4><span class="sr-only">(current)</span></a>
						</div>
						<hr class="light-100">
						<div class="col-12">
							<a href="index.html"><h4><i class="fas fa-file"></i>Quản lý bài thi</h4></a>
						</div>
					</div>
					<div class="qc">
						<a href="#"><img src="images/qc.gif" class="mx-auto d-block"></a>
					</div>
				</div>
				<div class="col-9">
					<h3 class="text-center text-black"> Danh Sách Người Dùng</h3>
					<?php
						include("ql-users.php");
					?>
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