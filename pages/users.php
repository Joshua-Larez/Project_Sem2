<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Local CSS -->
    <link rel="stylesheet" href="../css/users.css">

    <title>Magazijn</title>
  </head>

  <body>

    <!-- add users -->
    <!-- all content goes here  -->

    <div id="buttons">
      <button type="button" class="btn btn-outline-dark" onclick="unhideAdd()">toevoegen</button>
      <button type="button" class="btn btn-outline-dark" onclick="unhideEdit()">aanpassen</button>
      <button type="button" class="btn btn-outline-dark" onclick="unhideDelete()">verwijderen</button>
    </div>

    <!-- add users form -->
    <div class="add" id="add">
      <div class="container" id="underadd">
        <!-- form for filling in the accounts for the app  -->
        <Form action="../add_users_script.php" method="post">
          <!-- title and a addmore button which adds more form with javascript to add more than 1 account per submit -->
          <h1>Nieuwe Users Toevoegen
            <a class="add-more-form float-end btn btn-success" onclick="addMore()">meer toevoegen</a>     
          </h1>   
          <!-- main form -->
          <div class="container-fluid mb-5">
            <div class="row input-bundle">
              <div class="col-sm-6">
                <div class="form-group mb-2">
                  <label for="firstname[]">Voornaam</label>
                  <input type="text" name="firstname[]" class="form-control" required placeholder="Enter Voornaam">
                </div>
              </div>
  
              <div class="col-sm-6">
                <div class="form-group mb-2">
                  <label for="infix[]">Tussenvoegsel</label>
                  <input type="text" name="infix[]" class="form-control" placeholder="Enter Tussenvoegsel">
                </div>
              </div>
  
              <div class="col-sm-6">
                <div class="form-group mb-2">
                  <label for="lastname[]">Achternaam</label>
                  <input type="text" name="lastname[]" class="form-control" required placeholder="Enter Achternaam">
                </div>
              </div>
  
              <div class="col-sm-6">
              <div class="form-group mb-2">
                  <label for="email[]">Email</label>
                  <input type="text" name="email[]" class="form-control" required placeholder="Enter Email">
                </div>
              </div>
  
              <div class="col-sm-6">
                <div class="form-group mb-2">
                  <label for="password[]">Wachtwoord</label>
                  <input type="text" name="password[]" class="form-control" required placeholder="Enter Wachtwoord">
                </div>
              </div>
  
              <div class="col-sm-6">
                <label for="userrole[]">Gebruikers-rol</label>
                <select class="form-select" name="userrole[]" aria-label="Default select example" required>
                  <option value="student">Student</option>
                  <option value="super-user">Super-user</option>
                  <option value="magazijn-beheerder">Magazijn-beheerder</option>
                  <option value="financial-beheerder">Financial-beheerder</option>
                </select>
              </div>
            </div>
          </div>
  
          <!-- from Nodechild Template-->
          <template id="main-form-template" data-id='0'>
            <div class="container-fluid main-form mb-4" id="main-form">
              <div class="row input-bundle">
                <div class="col-sm-6">
                  <div class="form-group mb-2">
                    <label for="firstname[]">Voornaam</label>
                    <input type="text" name="firstname[]" class="form-control" required placeholder="Enter Voornaam">
                  </div>
                </div>
  
                <div class="col-sm-6">
                  <div class="form-group mb-2">
                    <label for="infix[]">Tussenvoegsel</label>
                    <input type="text" name="infix[]" class="form-control" placeholder="Enter Tussenvoegsel">
                  </div>
                </div>
  
                <div class="col-sm-6">
                  <div class="form-group mb-2">
                    <label for="lastname[]">Achternaam</label>
                    <input type="text" name="lastname[]" class="form-control" required placeholder="Enter Achternaam">
                  </div>
                </div>
  
                <div class="col-sm-6">
                <div class="form-group mb-2">
                    <label for="email[]">Email</label>
                    <input type="text" name="email[]" class="form-control" required placeholder="Enter Email">
                  </div>
                </div>
  
                <div class="col-sm-6">
                  <div class="form-group mb-2">
                    <label for="password[]">Wachtwoord</label>
                    <input type="text" name="password[]" class="form-control" required placeholder="Enter Wachtwoord">
                  </div>
                </div>
  
                <div class="col-sm-6">
                  <label for="userrole[]">Gerbuikers-rol</label>
                  <select class="form-select" name="userrole[]" aria-label="Default select example" required>
                    <option value="student">Student</option>
                    <option value="super-user">Super-user</option>
                    <option value="magazijn-beheerder">Magazijn-beheerder</option>
                    <option value="financial-beheerder">Financial-beheerder</option>
                  </select>
                </div>
  
                <!-- delete button -->
                <button type="button" data-id='0' class="remove-btn mx-auto mb-2 col-6 btn btn-danger" id="remove" onclick="Delete(this)">Verwijderen</button>
  
              </div>
            </div>
          </template>
  
          <!-- here goes new forms -->
          <div class="paste-new-forms mt-5 mb-5"></div>
  
          <!-- submit button to the database -->
          <button type="submit" value="submit" class="submit btn btn-lg">submit</button>
        </Form>
  
      <!-- do not go under this dive or nothing will align properly -->
      </div>
    </div>

    <!-- edit user form -->
    <div id="edit" class="edit">
      <div class="container">
        <div class="row mt-4">
          <h1 class=" col-6" >Users Aanpassen</h1>
          <input type="text" class="col-6" id="myInput" onkeyup="searchThrough();" placeholder="Search for names..">
        </div>
        <div class="text-center mt-3" style="border: 1px solid black;">
          <table class="table" id="myTable">
            <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">naam</th>
                  <th scope="col">tussenvoegsel</th>
                  <th scope="col">achternaam</th>
                  <th scope="col">rol</th>
                  <th scope="col">wijzigen</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                require "../database.php";

                try {
                  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $stmt = $conn->prepare("SELECT id, firstname, infix, lastname, userrole FROM users order by id ");
                  $stmt->execute();
              
                  // set the resulting array to associative
                  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                  // $rows = "";
                  foreach ($stmt->fetchAll() as $k=>$v) {
                    if ($v == 0 || empty($v)){
                      echo "<thead> there is no bestelling </thead>";
                    }
                    else {
                      echo "<tr>
                          <th scope='row'>{$v["id"]}</th>
                          <td>{$v["firstname"]}</td>
                          <td>{$v["infix"]}</td>
                          <td>{$v["lastname"]}</td>
                          <td>{$v["userrole"]}</td>
                          <td><a href='../edit_user.php?id={$v["id"]}'><box-icon  name='edit-alt'></box-icon></a></td>
                      </tr>";
                    }
                  }
                } catch(PDOException $e) {
                  echo "Error: " . $e->getMessage();
                }   
              ?>
            </tbody>
          </table>    
        </div>
      </div>
    </div>

    <!-- delete user form -->
    <div id="delete">verwijderen</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- javascript for this index -->
    <script src="../js/users.js"></script>

    <!-- boxicons usage link -->
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
  </body>
</html>



