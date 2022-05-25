<?php
  require 'config.php';

  //check the current user that is logged in 
  $currentuser = $_SESSION['userrole'];

  if (isset($currentuser)) {
    // send the user to the userrole page
    switch ($currentuser) {
      case 'super-user':
        header("Location: ./index.php");
        break;
      case 'student':
        header("Location: ./index.php");
        break;
      case 'financial-beheerder':
        header("Location: ./index.php");
        break;
      case 'magazijn-beheerder':
        header("Location: ./index.php");
        break;
      case 'null':
          header("Location: ./login.php");
        break;
      default:
        header("Location: ./login.php");
        $_SESSION['status'] = " ";
        exit(0);
        session_destroy();
        break;
    }
  } else {
  // https://www.fundaofwebit.com/post/how-to-insert-multiple-data-into-db-in-php-mysql
  // if userrole is not set send back to login  
    $_SESSION['status'] = " ";
    header("Location: ./login.php");
    exit(0);
    session_destroy();
  }
  

