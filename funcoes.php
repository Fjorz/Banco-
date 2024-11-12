<?php

include_once "objects/aluno.php";
include_once "config/database.php";

$banco = new Database();
$bd = $banco->conectar();
$a = new aluno($bd); 
$alunos = null;


function index(){
    global $alunos;
    
    $pituca = new Database();
    $bd = $pituca->conectar();
    $a = new aluno($bd);
    $alunos = $a->lerTodos();
}

if (isset($_POST['cadastrar'])) {
    $a->nome = $_POST['nome'];
    $a->telefone = $_POST['telefone'];
    $a->email = $_POST['email'];

    if ($a->cadastrar()) {
        header("Location: index.php");
        exit;
    }
}

if (isset($_GET['exclusao_ra'])) {
    $a->ra = $_GET['exclusao_ra'];
    
    if ($a->excluir($ra_excluir)) {
        echo "<p>Aluno com RA {$ra_excluir} excluido com sucesso.</p>";
        header("Location: index.php"); 
        exit;
    } 
}

if (isset($_GET['editar'])){
    $a->ra = $_GET['ra'];
    $a->nome = $_GET['nome_edit'];
    $a->email = $_GET['email_edit'];
    $a->telefone = $_GET['telefone_edit'];
    if ($a->editar()){
        header('Location: index.php');
    }
}


?>
