<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de ALunos</title>
</head>
<body>
<h1>Cadastro de Alunos</h1>    

<div class="container" style="display: flex;">

    <form action="funcoes.php" method="post">
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email</label>
        <input type="text"  name="email" id="email">
        <label for="email">Telefone</label>
        <input type="text"  name="telefone" id="telefone">
        <button name="cadastrar">Cadastrar</button>
    </form>

    

</div>

</body>
</html>