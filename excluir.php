<?php 

include ("cabecalho.php"); 

$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "userdb") or
die("Erro na seleção do banco:" . mysqli_error($con));

$id = $_GET['id'];

$query = "delete from produto where id = " . $id;

$registros = mysqli_query($con, $query) or
die("Erro na exclusão de registro no banco:" . mysqli_error($con));

echo "Produto excluído com sucesso!";
echo '<a href="lerrfm.php">Voltar</a>';

?>