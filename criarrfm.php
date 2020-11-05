<?php include("cabecalho.php"); ?>

<form action="criar.php" method="post">

    <label for="nome"> Nome:  </label>
    <input type="text" name="nome" id="nome" maxlength="50"/>
    <br>

    <label for="descricao"> Descrição:  </label>
    <input type="text" name="descricao" id="descricao" maxlength="200"/>
    <br>

    <label for="preco"> Preco:  </label>
    <input type="text" name="preco" id="preco" />
    <br>

    <input type="submit" value="enviar" id="enviarButton" />

</form>