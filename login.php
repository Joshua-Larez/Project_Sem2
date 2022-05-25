<?php
// connect to database
require 'config.php';

if (isset($_POST['login'])) {
	$errMsg = '';
    echo $errMsg;

	// Get data from FORM
	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($email == '')
    {
        $errMsg ='Enter email';
        echo $errMsg;
    }
	else if ($password == '')
    {
        $errMsg = 'Enter password';
        echo $errMsg;
    }
	else if ($errMsg == '') {
		try {
			$stmt = $connect->prepare('SELECT id, firstname, infix, lastname, email, password, userrole FROM users WHERE email = :email');
			$stmt->execute(array(
				':email' => $email
			));
			$data = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($data == false) {
				echo "User $email not found.";
			} else {
				if ($password == $data['password']) {
					$_SESSION['firstname'] = $data['firstname'];
					$_SESSION['infix'] = $data['infix'];
					$_SESSION['lastname'] = $data['lastname'];
					$_SESSION['email'] = $data['email'];
					$_SESSION['password'] = $data['password'];
					$_SESSION['userrole'] = $data['userrole'];

					header('Location: role_script.php');
                    exit;
				} else
					$errMsg =  'Password not match.';
			}
		} catch (PDOException $e) {
			$errMsg =  $e->getMessage();
		}
	}
    else
    {
        $errMsg =  'error message';
    }
}
else
{
	// this will always display because the user is not logged in.
    $errMsg =  ''; 
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

				// https://www.fundaofwebit.com/post/how-to-insert-multiple-data-into-db-in-php-mysql
				// makes an alert that the used account does not have a userrole	
				if(isset($_SESSION['status']))
				{
					?>
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>user does not exist try again!</strong> <?php echo $_SESSION['status']; ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					<?php
					unset($_SESSION['status']);
				}

				
				if (isset($errMsg)) {
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">' . $errMsg . '</div>';
				}
				?>
				<form action="" method="POST">
					<div class="header">
						<img src="./assets/img/logo-new@2x.png" alt="MBO Utrecht Logo">
						<h1>Inloggen</h1>
					</div>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email adres</label>
						<input type="email" class="form-control" name="email" id="exampleInputEmail1" value="" autocomplete="off" class="box" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control" name="password" value="" autocomplete="off" class="box" id="exampleInputPassword1">
					</div>
					<div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Ga akkoord met de algemene voorwaarden</label>
					</div>
					<button type="submit" name='login' value="Login" class="btn btn-primary">Inloggen</button>
				</form>
			</div>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>