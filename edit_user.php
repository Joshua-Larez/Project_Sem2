<?php 

include "./database.php";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM `users` Where `id` = :id");
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $v = $stmt->fetch();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
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
    
    <!--  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <!-- Local CSS -->
    <link rel="stylesheet" href="../css/users.css">

    <title>Magazijn</title>
  </head>

  <body>
    <Form action="../edit_user_script.php" method="post">
      <input hidden type="text" name="id" value="<?=$_GET['id']?>">

      <div class="container">
      <h1>User wijzigen</h1> 
        <div class="container-fluid mb-5">
          <div class="row input-bundle">
            <div class="col-sm-6">
              <div class="form-group mb-2">
                <label for="firstname">Voornaam</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo $v["firstname"]?>" required placeholder="Enter Voornaam">
              </div>
            </div>
    
            <div class="col-sm-6">
              <div class="form-group mb-2">
                <label for="infix">Tussenvoegsel</label>
                <input type="text" name="infix" class="form-control" value="<?php echo $v["infix"]?>" placeholder="Enter Tussenvoegsel">
              </div>
            </div>
    
            <div class="col-sm-6">
              <div class="form-group mb-2">
                <label for="lastname">Achternaam</label>
                <input type="text" name="lastname" class="form-control" value="<?php echo $v["lastname"]?>" required placeholder="Enter Achternaam">
              </div>
            </div>
    
            <div class="col-sm-6">
            <div class="form-group mb-2">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $v["email"]?>" required placeholder="Enter Email">
              </div>
            </div>
    
            <div class="col-sm-6">
              <div class="form-group mb-2">
                <label for="password">Wachtwoord</label>
                <input type="text" name="password" class="form-control" value="<?php echo $v["password"]?>" required placeholder="Enter Wachtwoord">
              </div>
            </div>
    
            <div class="col-sm-6">
              <label for="userrole">Gebruikers-rol</label>
              <select class="form-select" name="userrole" aria-label="Default select example" required>
                <option value="<?php echo $v["userrole"]?>"><?php echo $v["userrole"]?></option>
                <option value="student">Student</option>
                <option value="super-user">Super-user</option>
                <option value="magazijn-beheerder">Magazijn-beheerder</option>
                <option value="financial-beheerder">Financial-beheerder</option>
              </select>
            </div>
          </div>
        </div>

        <button type="submit" value="submit" class="submit btn btn-lg">Opslaan</button>
      </div>
    </Form>
  </body>
    
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- javascript for this index -->
  <script defer src="../js/users.js"></script>
  <script defer src="../js/sidebar.js"></script>

  <!-- boxicons usage link -->
  <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
</html>