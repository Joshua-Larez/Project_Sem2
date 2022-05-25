<?php
	require 'config.php';

	if(isset($_POST['register'])) {
		$errMsg = '';

		// Get data from FROM
		$firstname = $_POST['firstname'];
		$infix = $_POST['infix'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$userrole = 'student';

		if($firstname == '')
			$errMsg = 'Enter your firstname';
		if($lastname == '')
			$errMsg = 'Enter your lastname';
		if($email == '')
			$errMsg = 'Enter email';
		if($password == '')
			$errMsg = 'Enter password';

		if($errMsg == ''){
			try {
				$stmt = $connect->prepare('INSERT INTO users (firstname, infix, lastname, email, password, userrole) VALUES (:firstname, :infix, :lastname, :email, :password, :userrole)');
				$stmt->execute(array(
					':firstname' => $firstname,
					':infix' => $infix,
					':lastname' => $lastname,
					':email' => $email,
					':password' => $password,
					':userrole' => $userrole
					));
				header('Location: register.php?action=joined');
				exit;
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'joined') {
		header('Location: login.php');
	}
?>


<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css">

	<title>Inloggen</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="border">
				<?php
				if (isset($errMsg)) {
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">' . $errMsg . '</div>';
				}
				?>
				<form action="" method="post">
					<div class="header">
						<img src="./assets/img/logo-new@2x.png" alt="MBO Utrecht Logo">
						<h1>Register</h1>
					</div>
					<div class="mb-3">
						<label for="Inputfirstname" class="form-label">firstname</label>
						<input type="firstname" class="form-control" id="Inputfirstname" name="firstname" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname'] ?>" aria-describedby="firstnameHelp">
					</div>
					<div class="mb-3">
						<label for="Inputinfix" class="form-label">infix</label>
						<input type="infix" class="form-control" name="infix" id="Inputinfix" value="<?php if (isset($_POST['infix'])) echo $_POST['infix'] ?>" aria-describedby="infixHelp">
					</div>
					<div class="mb-3">
						<label for="Inputlastname" class="form-label">lastname</label>
						<input type="lastname" class="form-control" name="lastname" id="Inputlastname" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname'] ?>" aria-describedby="lastnameHelp">
					</div>
					<div class="mb-3">
						<label for="InputEmail" class="form-label">Email adres</label>
						<input type="email" class="form-control" name="email" id="InputEmail" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<label for="InputPassword" class="form-label">Password</label>
						<input type="password" class="form-control" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password'] ?>" id="InputPassword">
					</div>
					<div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="Check">
						<label class="form-check-label" for="Check">Ga akkoord met de algemene voorwaarden</label>
					</div>
					<button type="submit" name='register' value="Register" class="btn btn-primary">Inloggen</button>
				</form>
			</div>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>