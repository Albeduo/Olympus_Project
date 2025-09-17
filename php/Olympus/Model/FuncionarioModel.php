<?php 

class FuncionarioModel {
    public $IdFuncionario, $Ativo, $Cargo, $CPF, $FT_Perfil, $Nascimento, $Nome, $Pix_Key, $Sexo;
    
    public function save(){
        
        include_once __DIR__ . '/../db/FuncionarioDB.php';

        $db = new FuncionarioDB();

        $db->insert($this);
    }


}


?>