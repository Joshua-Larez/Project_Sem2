<?php
  //connect to database 
  require 'config.php ';

  // if user firstname, infix, lastname, role isnt set sent back to login page
  if (!isset($_SESSION['firstname']) ||!isset($_SESSION['infix']) || !isset($_SESSION['lastname']) || !isset($_SESSION['userrole'])) {
    header("Location: ./login.php");
  }else {
    // get the session details
    $firstname = $_SESSION["firstname"];
    $infix = $_SESSION["infix"];
    $lastname = $_SESSION["lastname"];
    $currentrole = $_SESSION["userrole"];
  }

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
    <link rel="stylesheet" href="./css/sidebar.css">

    <title>Magazijn</title>
  </head>

  <body>
  <!-- this is the sidebar for navigation -->
     <div id="mySidebar" class="sidebar">
        <a class="closeOpenbtn" onclick="toggleNav();">☰</a>
        
        <a href="./pages/aanvraag.php" id="aanvraag" target="myiframe">
          <box-icon  name='basket'></box-icon>
          <p>aanvraag</p>
        </a>

        <a href="./pages/nieuw_artikel.php" id="bestellen" target="myiframe">
          <box-icon  name='plus-circle'></box-icon>
          <p>Bestellen</p>
        </a>

        <a href="./pages/magazijn.php" id="magazijn" target="myiframe">
          <box-icon  name='folder'></box-icon>
          <p>Magazijn</p>
        </a>

        <a href="./pages/lenen.php" id="lenen" target="myiframe">
          <box-icon  name='book-open'></box-icon>
          <p>Lenen</p>
        </a>

        <a href="./orders.php" id="goedkeuren" target="myiframe">
          <box-icon  name='check-square'></box-icon>
          <p>goedkeuren</p>
        </a>

        <a href="./pages/users.php" id="users" target="myiframe">
          <box-icon  name='group'></box-icon>
          <p>users</p> 
        </a>
    </div>

    <!-- this is the top of the content -->
    <div id="main">
      <!-- topmenu -->
      <div class="topmenu">
        <div class="first">
            <img src="https://mboutrecht.onderwijsonline.nl/img/logos/mboutrecht.png">
            <h4>MBO-UTRECHT</h4> 
        </div>   

        <div class="second">
          <div>
          <!-- gives the current user name, infix, lastname-->
            <h6>
              <?php
                  echo ucfirst($firstname) . ' ' . ucfirst($infix) . ' ' . ucfirst($lastname); 
              ?>
            </h6>
          </div>

          <!-- account manager dropdown -->
          <div class="dropdown">
            <!-- only an icon appears and when you click it the dropdown appears -->
            <a class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <box-icon name='user-circle' size='sm'></box-icon>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li>  
                <p class="dropdown-item">
                <!-- gives current role-->
                  <?php echo ucfirst($currentrole);?> 
                </p>    
              </li>
              <!-- divition in the dropwdown -->
              <li><hr class="dropdown-divider"></li>
              <!-- got to account -->
              <li>  
                <a  class="dropdown-item" href="./pages/account.php" id="accountButton" target="myiframe">
                  Profiel
                </a>
              </li>
              <!-- logout -->
              <li>
                <a class="speci dropdown-item" style="margin:0; white-space: nowrap; display: inline-flex;" href="./logout.php">
                  <p>Uitloggen</p>  
                  <box-icon name='log-out'></box-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- all content goes here  -->
    <div id="content">
      <div class="container-fluid">
        <iframe id="myiframe" name="myiframe" src="" style="overflow:hidden;height:1000px;width:100%;" height="100%" width="100%"></iframe>
      </div>  
    </div>
          

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- javascript for this index -->

    <!-- get the current userrole from the session and passes it to the javascript  -->
    <script type="text/javascript"> let role = '<?php echo $currentrole; ?>'; </script>
    <script type="text/javascript" src="./js/sidebar.js"> </script>

    <!-- boxicons usage link -->
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
  </body>
</html>