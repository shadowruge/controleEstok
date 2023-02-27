<?php
 require_once('databaseconnect.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">   
    <title>Cadastro de produtos</title>
</head>
<body>
<h1>Cadastro de produtos</h1>
    <div id="container">
        
        <form method="POST" action="adicionar_produto.php">
            <label for="peso">Nome:</label>
            <input type="text" name="nome" id="nome">
            
            <label for="peso">Peso:</label>
            <input type="number" name="peso" id="peso" step="0.01" required>
            
            <label for="embalagem">Embalagem:</label>
            <input type="text" name="embalagem" id="embalagem" required>
            
            <label for="sabor">Sabor:</label>
            <input type="text" name="sabor" id="sabor">
            
            <label for="codigo_barras">Código de barras:</label>
            <input type="number" name="codigo_barras" id="codigo_barras" required>
            
            <label for="fornecedores">Fornecedores:</label>
            <input type="text" name="fornecedores" id="fornecedores" required>
            
            <label for="dados_fiscais">Dados fiscais:</label>
            <input type="text" name="dados_fiscais" id="dados_fiscais" required>
            
            <input type="submit" value="Cadastrar">
        </form>


    </div>
</body>
</html>