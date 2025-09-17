<?php
include 'Controller/FuncionarioController.php';
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$conteudo = '';

switch($url){
    case '/Olympus/':
        $conteudo = '<h2>Página Inicial</h2>';
        break;
    case '/Olympus/funcionario':
        ob_start();
        FuncionarioController::index();
        $conteudo = ob_get_clean();
        break;
    case '/Olympus/funcionario/formulario':
        ob_start();
        FuncionarioController::form();
        $conteudo = ob_get_clean();
        break;
    case '/Olympus/funcionario/formulario/save':
        FuncionarioController::save();
        exit;
    default:
        $conteudo = '<h2>ERRO 404</h2>';
        break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Olympus/style/style.css">
    <title>Olympus</title>
</head>

<body>
    <header>
        <a href="/Olympus/">Inicio</a> |
        <a href="/Olympus/funcionario/formulario">Cadastrar Funcionario</a> |
        <a href="#">Dashboard</a>
    </header>
    <div class="content">
        <?php echo $conteudo; ?>
    </div>
</body>

</html>