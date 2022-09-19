<!DOCTYPE html>
<html lang="en">

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
	<title>Basic Banking System</title>
	<link rel="stylesheet" href="Amo.css">
</head>
<body>
<!-- <a class="navbar-brand" href="Home.php" >GRIP Bank</a> -->
<h1 class="animate__animated animate__bounce">GRIP Bank</h1>
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
			<!-- <a class="navbar-brand" href="Home.php">GRIP Bank</a> -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<div class="P">
					<a class="nav-link active" aria-current="page" href="Home.php">Dashboard</a>
					<div class="S">
					  <!-- <a class="nav-link" href="T_history.php">Transaction History</a>
					  <a class="nav-link" href="UserList.php">Users</a> -->
					  <ol>
						<li><a class="nav-link" href="T_history.php">Transaction History</a></li>
						<li><a class="nav-link" href="UserList.php">Users</a></li>
					  </ol>
					</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<br><br>

	<div class="">
		<div class="card text-center">
			<div class="card-header">
			</div>
			<div class="card-body">
				<h5 class="card-title">Users Details</h5>
				<p class="card-text">Users Registered </p>
				<a href="UserList.php" class="btn btn-primary" >See Here</a>
			</div>
		</div>
		<br>
		<div class="card text-center">
			<div class="card-header">
			</div>
			<div class="card-body">
				<h5 class="card-title">Transaction History</h5>
				<p class="card-text">Trasaction </p>
				<a href="T_history.php" class="btn btn-primary">See Here</a>
			</div>
		</div>
	</div>

	<footer class="bg-light text-center text-dark fixed-bottom" style="background-color: #21081a;">
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2022 Copyright:
			<a class="text-dark" href="Home.php">Our Site</a>
			<h4>pratik@nikam12.com</h4>
		</div>
	</footer>

</body>

</html>