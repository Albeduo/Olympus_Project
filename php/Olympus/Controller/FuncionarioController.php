<?php 
class FuncionarioController{
    public static function index (){
        include 'View/modules/Funcionario/ListaFuncionario.php';
    }
    public static function form(){
        include 'View/modules/Funcionario/FormFuncionario.php';
    }
    public static function save(){
        include 'Model/FuncionarioModel.php';       
        $model = new FuncionarioModel();       
        $model->Nome = $_POST['Nome'];
        $model->CPF = $_POST['CPF'];
        $model->Pix_Key = $_POST['Pix_Key'];
        $model->Nascimento = $_POST['Nascimento'];
        $model->Sexo = $_POST['Sexo'];
        $model->Cargo = $_POST['Cargo'];       
        $model->save();
        header('Location: /Olympus/funcionario');
        exit;        
    }
}
?>