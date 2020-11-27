<?php

$produto = "$_POST[produto]";
$cor = "$_POST[cor]";
$valor = "$_POST[valor]";
$quantidade = "$_POST[quantidade]";
$fornecedor = "$_POST[fornecedor]";
$datadecomp = "$_POST[datadecomp]";

try{
    $con = new PDO("mysql:host=localhost;dbname=tcc", "root", "");
} catch (PDOException $e) {
    print "Erro: {$e->getMessage()}<br>";
    exit;
}
try{

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $cadastro=$con->exec ("INSERT INTO produto(produto, cor, valor, quantidade, fornecedor, datadecomp) VALUES ('$produto','$cor','$valor','$quantidade', '$fornecedor' , '$datadecomp')");

} catch (PDOException $e){
   
    $con->rollBack();

    print "Erro:{$e->getMessage()}<br>";
}
?>