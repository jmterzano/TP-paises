<?php
include './claseBase.php';




$pais=new Pais('fran');

echo "Nombre del pais:".$pais->name."<br>";
echo "Capital del pais:".$pais->capital."<br>";
echo "Region del pais:".$pais->region."<br>";
echo "Moneda del pais:".$pais->moneda."<br><br>";

echo json_encode($pais);


?>

