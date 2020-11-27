<?php

$id = $_GET["id"];

try{
    $con = new PDO("mysql:host=localhost;dbname=tcc", "root", "");
} catch (PDOException $e) {
    print "Erro: {$e->getMessage()}<br>";
    exit;
}
try{
	
   $delete=$con->exec(" DELETE FROM produto WHERE id = '$id'  ");

    $con->commit();

header("Refresh: 0; url=estoque.php");
 

} catch (PDOException $e){
   
    

    print "Erro:{$e->getMessage()}<br>";
}
?>