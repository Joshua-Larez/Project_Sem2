<?php
// Maak contaact met de mysqlserver en database
include("./database.php");

// $id = $_GET["id"];

$sql = "DELETE FROM orders WHERE orders.id = $id";

mysqli_query($conn, $sql);

header("Location: ./index.php");
