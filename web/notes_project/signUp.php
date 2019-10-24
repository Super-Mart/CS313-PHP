<!DOCTYPE html>
<html>

<head>
	<?php
	include('./common/head.php');
	?>
	<title>Sign Up</title>
</head>

<body>
	<div>
		<div class="container-fluid p-5 sign-in">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h1 class="card-title">Sign up for new account</h1>

					<form id="mainForm" action="createAccount.php" method="POST">

						<label for="txtUser"><strong>Username</strong></label>
						<input type="text" class="form-control" id="txtUser" name="txtUser" placeholder="Username">
						<br /><br />

						<label for="txtPassword"><strong>Password</strong></label>
						<input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password">
						<br /><br />

						<input type="submit" class="btn btn-success mb-3" value="Create Account" />
						<br />
					</form>
				</div>
			</div>
		</div>
	</div>

</body>

</html>