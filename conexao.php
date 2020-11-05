<?php 

$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "userdb") or
die("Erro na seleção do banco:" . mysqli_error($con));      

?>