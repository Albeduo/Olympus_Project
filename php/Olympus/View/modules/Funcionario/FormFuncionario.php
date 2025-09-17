<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>Cadastro de Funcionario</title>
    <style>
    label,
    input {
        display: block;
    }
    </style>
</head>

<body>
    <fieldset>
        <legend>Cadastro de Funcionario</legend>

        <form method="POST" action="/Olympus/funcionario/formulario/save">
            <label for="Nome">Nome: </label>
            <input type="text" name="Nome">

            <label for="CPF">CPF: </label>
            <input type="text" name="CPF">

            <label for="Pix_Key">Chave Pix: </label>
            <input type="text" name="Pix_Key">

            <label for="Nascimento">Data de Nascimento: </label>
            <input type="date" name="Nascimento">

            <label for="Sexo">Sexo: </label>
            <select id="Sexo" name="Sexo">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
                <option value="O">Outro</option>
            </select>

            <label for="Cargo">Cargo: </label>
            <select id="Cargo" name="Cargo">
                <option value="Administrativo">ADM</option>
                <option value="Financeiro">Financeiro</option>
                <option value="Recursos Humanos">R.H</option>
                <option value="Tecnologia">T.I</option>
                <option value="Comercial">Comercial</option>
                <option value="Marketing">Marketing</option>
            </select>

            <hr>

            <input type="submit" value="Salvar">
        </form>

    </fieldset>
</body>

</html>