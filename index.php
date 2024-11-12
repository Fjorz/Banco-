<?php
include_once "config/database.php";
include_once "objects/aluno.php";
include_once "funcoes.php";

index(); // Chamando a função index dentro de funções.php.;
$banco = new Database();
$bd = $banco->conectar();
$aluno = new aluno($bd);
global $alunos;


 if ($alunos) {

        echo "<table>";
        echo "<tr><td>RA</td><td>Nome</td><td>Email</td><td>Telefone</td><td>Ações</td>t<td>Editar</td>/tr>";
        
        foreach ($alunos as $row) {
            echo "<tr>";
            echo "<td>" . $row->ra . "</td>";
            echo "<td>" . $row->nome . "</td>";
            echo "<td>" . $row->email . "</td>"; 
            echo "<td>" . $row->telefone . "</td>";
            echo "<td><a href='funcoes.php?exclusao_ra=" . $row->ra . "'>Excluir</a></td>";
            echo "<td><a href='editar.php?xu=" . $row->ra . "'>Editar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Nenhum aluno cadastrado</p>";
    }

    echo " "

/*

if ($bd) {
    $aluno = new Aluno($bd);

    $resultado = $aluno->lerTodos();

    if (!empty($resultado)) {
        echo "<table>";
        echo "<tr><td>RA</td><td>Nome</td><td>Email</td><td>Telefone</td><td>Ações</td></tr>";
        
        foreach ($resultado as $row) {
            echo "<tr>";
            echo "<td>" . $row->ra . "</td>";
            echo "<td>" . $row->nome . "</td>";
            echo "<td>" . $row->email . "</td>";
            echo "<td>" . $row->telefone . "</td>";
            echo "<td><a href='funcoes.php?exclusao_ra=" . $row->ra . "'>Excluir</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Nenhum aluno cadastrado.</p>";
    }
} 

*/






//fazendo exemplo de fetch com while aqui em baixo

// while($res = $resultado->fetch(PDO::FETCH_ASSOC)){
//     extract($res);
//     echo "RA: {$ra}";
//     echo "<br> nome: {$nome}";
//     echo "<br> email: {$email}";
//     echo "<br> telefone: {$telefone}";

// }

//este foreach de baixo foi feito com featch_assoc, mostrando meus dados com a variavel row.

// foreach($resultado as $row){
//     echo"<br>";
//     echo "RA:". $row['ra']. "<br>";
//     echo "Nome:". $row['nome']. "<br>";
//     echo "E-mail:". $row['email']. "<br>";
//     echo "Telefone:". $row['telefone']. "<br>";
// }
?>



<form action="index.php" method="post">
    <input type="text" name="nomes">
    <button name="confrimar">puxa</button>
</form>



