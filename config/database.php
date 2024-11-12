<?php
 
class database{
    private $host = "localhost:3306"; // este codigo se redireciona so indereco de ip da rede usada ao momento
    private $banco = "crudaula"; // este codigo mostra a qual banco de dados euq uero me conectar
    private $usuario = "root"; // permissao do usuario ao sistema (nao tenho certeza dessa informacao)
    private $senha = ""; //se tiver senha aplique a senha dentro das aspas
    public $con;
 
 
    public function conectar(){
        $this -> con = null;
 
        try{
            $this -> con = new PDO("mysql:host=$this->host; dbname=$this->banco", $this->usuario, $this->senha);            
        } catch(PDOException $e){
            echo "erro". $e -> getMessage();
        }
        return $this-> con;
    }
}