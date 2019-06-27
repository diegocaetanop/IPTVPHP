<?php
session_start();
include('verifica_login.php');

var_dump($_POST);

if (isset($_POST['submit'])
    && !empty($_POST['nome'])
    && !empty($_POST['status'])
    && !empty($_POST['email'])
    && !empty($_POST['telefone'])
    && !empty($_POST['datavalidade'])
    && !empty($_POST['datainicial']) ) {
    echo "recebi um post";
    
} else {
    echo "Inválido";
}

?>

<form action="#" method="post">
    <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" style="width: 25em" value="" required>
                <link rel="stylesheet" type="text/css" href="css/padrao.css">
            </div>
    <div class="campo">
        <div class="campo">
            <label>Status</label>
            <label>
                <input type="radio" name="status" value="enable" required> Ativo
                <link rel="stylesheet" type="text/css" href="css/padrao.css">
            </label>
            <label>
                <input type="radio" name="status" value="disable" required> Desativado
                <link rel="stylesheet" type="text/css" href="css/padrao.css">
            </label>
        </div>
        <div class="campo">
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" style="width: 20em" value="" required>
        </div>
        <div class="campo">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" style="width: 10em" value="" required>
        </div>

        <div class="campo">
            <label for="telefone">Data de Validade</label>
            <input type="text" id="datavalidade" name="datavalidade" style="width: 10em" value="" required>
        </div>
        <div class="campo">
        <div class="campo">
            <label for="telefone">Data Inicial</label>
            <input type="text" id="datainicial" name="datainicial" style="width: 10em" value="" required>
        </div>
        <div class="campo">
        <button type="submit" name="submit">Enviar</button>
    
</form>