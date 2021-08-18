<html>

<head>
    <title>Exemplo de Revisão de HTML com PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form>
        <fieldset style="width: 600px;">
            <legend>Cadastro de aluno</legend>
            <label>
                Nome: <input type="text" name="cpNome">
            </label>
            <label>
                Data de Nascimento: <input type="date" name="cpData">
            </label>
            <select>
                <option value="">Selecione seu sexo:</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
                <option value="I">idefinido</option>
                <!--- toda informação obtida do usuario deve ser armazenada exatamenta como
                    foi dita/inserida --->
            </select>
        </fieldset>
    </form>
</body>

</html>