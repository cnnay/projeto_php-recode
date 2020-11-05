<?php 

include ("cabecalho.php"); 

$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "userdb") or
die("Erro na seleção do banco:" . mysqli_error($con));

$nome = $_POST['nome'];

$query = "select * from produto where nome like '%$nome%' ";

$registros = mysqli_query($con, $query) or
die("Erro na inserção de registro no banco:" . mysqli_error($con));

$linhas = mysqli_num_rows($registros);

if ($linhas == 0) {
    echo "Não existem registros";die();
}

$i = 0;

while ($i < $linhas) {

    $registro = mysqli_fetch_array($registros);

    echo '<div class="container-lista">';
    echo "Descrição: " . $registro["descricao"] . "<br>";
    echo "Nome: " . $registro["nome"] . "<br>";
    echo "Preço: R$ " . $registro["preco"] . "<br>";
    echo '<a href="excluir.php?id=' . $registro["id"] . '">Excluir</a>';
    echo "<hr><br>";
    echo "</div>";

    $i++;
}


echo '<a href="lerrfm.php">Voltar</a>';

?>