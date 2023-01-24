<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>RegistrationForm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- LINEARICONS -->
	<link rel="stylesheet" href="fonts/linearicons/style.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="css/style.css">

	<!-- LINK-FOR-BOOTSTRAP -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
</head>

<body>

	<div class="wrapper">
		<div class="inner">
			<img src="images/image-1.png" alt="" class="image-1">
			<form action="./Registerhandel.php" method="post">
				<h3>Admin Registeration</h3>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="text" class="form-control mx-4" placeholder="Username" name="user" id="user">
				</div>
				<!-- <div class="form-holder">
					<span class="lnr lnr-phone-handset"></span>
					<input type="text" class="form-control" placeholder="Phone Number" id="phone" name="phone">
				</div> -->

				<div class="form-holder">
					<span class="lnr lnr-lock "></span>
					<input type="password" class="form-control mx-4" placeholder="Password" name="registerpass" id="registerpass">
				</div>
				<div class="form-holder">
					<span class="lnr lnr-lock"></span>
					<input type="password" class="form-control  mx-4" placeholder="Confirm Password" id="registercpass" name="registercpass">
				</div>
				<div class="form-holder">

					<a href="./adminlogin.php" class="my-3 link-primary">Already have an account</a>

				</div>
				<button>
					<span>Register</span>
				</button>
			</form>
			<img src="images/image-2.png" alt="" class="image-2">
		</div>

	</div>
	<!-- script-for-bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>