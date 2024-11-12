<?php  
        include_once'config/database.php';
        include_once'funcoes.php';
        include_once'objects/aluno.php';
 
            $database = new database;
            $db = $database->conectar();
            $aluno = new aluno($db);
 
 
 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/edit.css">
</head>
<body>
    <?php
    foreach ($aluno->lerAluno($_GET['xu']) as $rows){
       echo '<form action="funcoes.php" method="get">
            <input  class="shadow" type="text" value="'.$rows['ra'].'" name="ra" readonly><label for="">RA</label><br>
            <input  class="shadow" type="text" value="'.$rows['nome'].'" name="nome_edit"><label for="">Nome</label><br>
            <input  class="shadow" type="text" value="'.$rows['email'].'" name="email_edit"><label for="">Email</label><br>
            <input  class="shadow" type="text" value="'.$rows['telefone'].'" name="telefone_edit"><label for="">Telefone</label><br>
            <button name="editar">Enviar</button>
        </form>';
       
    }
    ?>
</body>
</html>