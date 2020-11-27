<?php

$id = $_GET["id"];
try {
   $conn = new PDO("mysql:host=localhost;dbname=tcc", "root", "");

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
   $update=$conn->exec(" UPDATE FROM produto WHERE id = '$id'  ");

   // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
 // echo $sql . "<br>" . $e->getMessage();
}

$conn = null;



?>
          