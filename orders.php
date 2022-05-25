<?php
include 'database.php';

$sql   = ("SELECT * FROM orders");

// dit is de functie die de query $via de verbding $con naar de database stuurt.
$result = mysqli_query($conn, $sql);

$records = "";
while ($record = mysqli_fetch_assoc($result)) {
  $records .= "
             <tr>
             
                 <th scope='row'>" . $record["id"] . "</th>
                     <td>" . $record["name"] . "</td>
                     <td>" . $record["stock"] . "</td>
                     <td>" . $record["price"] . "</td>
                     <td>" . $record["total"] . "</td>
                     <td> 
                  
                     <a href='./accept.php? id=" . $record["id"] . "'>
                      <img src='./img/icons/b_accept.svg' alt='check'>
                      </a>
                     </td> 
                     <td>
                    <button type='button' data-bs-toggle='modal' data-bs-target='' id=" . $record["id"] . ">
                     <img src='./img/icons/b_drop.svg' alt='cross' >
                     </button> 
                     </td> 
                 </tr>";
}
// 
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <h1>New Orders</h1>
  <hr>
  <div class="row">
    <div class="col-12">
      <table data-page-length='10' id="datatableid" class=" table table-bordered table-hover">
        <thead>
          <tr>

            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Stock</th>
            <th scope="col">Price</th>
            <th scope="col">Total</th>
            <th scope="col">Accept</th>
            <th scope="col">Decline</th>
          </tr>
        </thead>
        <tbody>
          
          <?php
          
          echo $records;
          ?>
                
        </tbody>
      </table>

    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>

</html>