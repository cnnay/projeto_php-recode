<?php 

include ("cabecalho.php"); 

$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "userdb") or
die("Erro na seleção do banco:" . mysqli_error($con));

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

$query = "insert into produto (descricao, nome, preco) ";
$query .= "values ('$descricao', '$nome', '$preco')";

mysqli_query($con, $query) or
die("Erro na inserção de registro no banco:" . mysqli_error($con));

echo "<h4>Cadastro realizado com sucesso!</h4><br>";
echo '<a href="criarrfm.php">Voltar</a>';

?>