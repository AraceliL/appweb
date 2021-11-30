<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripción'];
$categoria=$_POST['categoría'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];


$sql="UPDATE productos SET nombre='$nombre',descripción='$descripcion', categoría=$categoria, cantidad=$cantidad,precio=$precio WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>