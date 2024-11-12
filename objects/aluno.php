<?php
 
class aluno
{
   public $ra;
   public $nome;
   public $email;
   public $telefone;
   public $bd;
 
   public function __construct($bd)
   {
      $this->bd = $bd;
   }
 
   public function lerTodos()
   {
      $sql = "select * from aluno"; //selecionando a tabela do banco de dados
      $resultado = $this->bd->query($sql); //esta linha codigo busca as informacoes do banco de dados(bd) e o guarda dentro da variavel $resultado.
      $resultado->execute();
      $resultado = $resultado -> fetchALL(PDO::FETCH_OBJ);
 
      return $resultado;
   }
 
 
   public function lerAluno($nome){
      $nome = "%". $nome . "%"; //mostrando que eu irei usar um like
      $sql = "SELECT * FROM aluno WHERE ra LIKE :nome;";
      $resultado = $this->bd->prepare($sql);
      $resultado->bindParam(':nome',$nome); //quando ele ver que existe um ":nome" ele ira mostrar oque tem no meu $nome
      $resultado->execute();
 
      return $resultado->fetchALL(PDO::FETCH_ASSOC);
   }

   public function cadastrar(){
      $sql = "INSERT INTO aluno(nome,email,telefone) VALUES(:nome, :email, :telefone)";
      $stmt = $this->bd->prepare($sql);
      $stmt->bindParam('nome', $this-> nome, PDO::PARAM_STR);
      $stmt->bindParam('email', $this-> email, PDO::PARAM_STR);
      $stmt->bindParam('telefone', $this-> telefone, PDO::PARAM_STR);

      if($stmt->execute()){
         return true;
      } else {
         return false;
      }
   }

   public function excluir($ra) {
      $sql = "DELETE FROM aluno WHERE ra = :ra";
      $stmt = $this->bd->prepare($sql);
      $stmt->bindParam(':ra',$ra, PDO::PARAM_STR);
      
      return $stmt->execute();
  }

  public function editar(){
   $sql = "UPDATE aluno SET nome = :nome, email = :email, telefone = :telefone where ra = :ra";
   $stmt = $this->bd->prepare($sql);
   $stmt->bindParam(":nome", $this->nome);
   $stmt->bindParam(":email",$this->email);
   $stmt->bindParam(":telefone",$this->telefone);
   $stmt->bindParam(":ra",$this->ra);
   if($stmt->execute()){
       return true;
   }else {
       return false;
   }
}
}  
?>