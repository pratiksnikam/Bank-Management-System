<!DOCTYPE html>
<html lang="en">

<head>
	<title>Transfer Money</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>

	<?php
	include 'config.php';
	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);
	?>

	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="Home.php">GRIP Bank</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link active" aria-current="page" href="Home.php">Dashboard</a>
					<a class="nav-link" href="T_history.php">Transaction History</a>
					<a class="nav-link" href="UserList.php">Users</a>
				</div>
			</div>
		</div>
	</nav>


	<div class="container">
		<h2 class="text-center pt-4"><b><i>Users Details</i></b></h2><br>
		<div class="row">
			<div class="col">
				<div class="table-responsive-sm">
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<th scope="col" class="text-center py-2">No</th>
								<th scope="col" class="text-center py-2">Name</th>
								<th scope="col" class="text-center py-2">Email</th>
								<th scope="col" class="text-center py-2">Available Bal.</th>
								<th scope="col" class="text-center py-2">Transaction</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while ($rows = mysqli_fetch_assoc($result)) {
							?>
								<tr>
									<td class="py-2"><?php echo $rows['id'] ?></td>
									<td class="py-2"><?php echo $rows['name'] ?></td>
									<td class="py-2"><?php echo $rows['email'] ?></td>
									<td class="py-2"><?php echo $rows['balance'] ?></td>
									<td><a href="Transaction.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn">Transfer Money</button></a></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<br><br>

		<footer class="bg-light text-center text-dark " style="background-color: #21081a ;width:100%">
			<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
				© 2022 Copyright:
				<a class="text-dark" href="Home.php">Our Site</a>
				<h4>pratik@nikam12.com</h4>
			</div>
		</footer>
</body>

</html>