<?php 

class FuncionarioDB{
    
    private $pdo;


    public function __construct(){
            $this->pdo = new PDO( 'mysql:host=mysql;dbname=Olympus','root','root');
    }
    
    public function insert(FuncionarioModel $model){
        $sql = "INSERT INTO Funcionario (Nome,CPF,Pix_Key,Sexo,Nascimento,Cargo) VALUES (?, ?, ?, ?, ?, ?) ";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->CPF);
        $stmt->bindValue(3, $model->Pix_Key);
        $stmt->bindValue(4, $model->Sexo);
        $stmt->bindValue(5, $model->Nascimento);
        $stmt->bindValue(6, $model->Cargo);

        $stmt->execute();
        
    }

    public function update(FuncionarioModel $model){

    }

    public function select(){

    }

    public function delete(){

    }

}

?>