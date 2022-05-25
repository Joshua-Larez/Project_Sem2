<?php
  // connect to database
  require '../config.php';

  // get session details
  $firstname = $_SESSION['firstname'];
  $infix = $_SESSION['infix'];
  $lastname = $_SESSION['lastname'];
  $email = $_SESSION['email'];
  $userrole = $_SESSION['userrole'];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Local CSS -->
    <!-- <link rel="stylesheet" href="./css/sidebar.css"> -->
    <link rel="stylesheet" href="../css/account.css">
    
    <title>Magazijn</title>
  </head>

  <body>
    <!-- sidebar with top content-->
    <h1>account</h1>
    <div class="container">
      <div class="row this">
        <!-- firstname -->
        <div class="row">
          <label class="col-sm-3">Voornaam</label>
          <div class="col-sm-9">
            <p>:<?php echo ucfirst($firstname)?></p>
          </div>
        </div>
        <!-- infix -->
        <div class="row">
          <label class="col-sm-3">Tussenvoegsel</label>
          <div class="col-sm-9">
            <p>:<?php echo ucfirst($infix) ?></p>
          </div>
        </div>
        <!-- lastname -->
        <div class="row">
          <label class="col-sm-3">Achternaam</label>
          <div class="col-sm-9">
            <p>:<?php echo ucfirst($lastname)?></p>
          </div>
        </div>
        <!-- email -->
        <div class="row">
          <label class="col-sm-3">E-mail</label>
          <div class="col-sm-9">
            <p>:<?php echo ucfirst($email)?></p>
          </div>
        </div>
        <!-- userrole -->
        <div class="row">
          <label class="col-sm-3">User Role</label>
          <div class="col-sm-9">
            <p>:<?php echo ucfirst($userrole)?></p>
          </div>
        </div>
      </div>
    </div>

    <!-- javascript for this index -->
    <script src="./js/sidebar.js"></script>

    <!-- boxicons usage link -->
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
  </body>
</html>