<?php

session_start();

$badLogin = false;

// First check to see if we have post variables, if not, just
// continue on as always.

if (isset($_POST['txtUser']) && isset($_POST['txtPassword'])) {
	// they have submitted a username and password for us to check
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];

	// Connect to the DB
	require("./library/dbConnect.php");
	$db = get_db();

	$query = 'SELECT password FROM login WHERE username=:username';

	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);

	$result = $statement->execute();

	if ($result) {
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];

		// now check to see if the hashed password matches
		if (password_verify($password, $hashedPasswordFromDB)) {
			// password was correct, put the user on the session, and redirect to home
			$_SESSION['username'] = $username;
			header("Location: showNotes.php");
			die(); // we always include a die after redirects.
		} else {
			$badLogin = true;
		}
	} else {
		$badLogin = true;
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<?php
	include('./common/head.php');
	?>
	<title>Sign In</title>
</head>

<body>
	<div>

		<?php
		if ($badLogin) {
			echo "<div class='alert alert-danger' role='alert'><p>Incorrect username or password!</p></div><br /><br />\n";
		}
		?>

		<div class="container-fluid p-5 sign-in">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h1 class="card-title">Please sign in below:</h1>

					<form id="mainForm" action="signIn.php" method="POST">

						<label for="txtUser"><strong>Username</strong></label>
						<input type="text" class="form-control" id="txtUser" name="txtUser" placeholder="Username">
						<br /><br />

						<label for="txtPassword"><strong>Password</strong></label>

						<input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password">
						<br /><br />

						<input type="submit" class="btn btn-primary mb-3" value="Sign In" />
						<br />
						<p>Or <a href="signUp.php" class="card-link">Sign up</a> for a new account.</p>
					</form>
				</div>
			</div>

		</div>

	</div>

</body>

</html>