<html>

<head>
    <title>Exemplo de Revisão de HTML com PHP</title>
</head>

<body>
    <form>
        <center>
            <fieldset style="width: 600px;">
                <legend>Cadastro de aluno</legend>
                <label>
                Nome: <input type="text" name="cpNome">
            </label>
                <br>
                <label>
                Data de Nascimento: <input type="date" name="cpData">
            </label>
                <br><br>
                <select name="cpSexo">
                <option value="">Selecione seu sexo:</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
                <option value="I">idefinido</option>
                <!--- toda informação obtida do usuario deve ser armazenada exatamenta como
                    foi dita/inserida --->
            </select>
                <br><br> Qual serie cursa:
                <input type="radio" value="1°Ano" name="grupo" id="rb1">
                <label for="rb1"> 1°Ano</label>
                <input type="radio" value="2°Ano" name="grupo" id="rb2">
                <label for="rb2"> 2°Ano</label>
                <input type="radio" value="3°Ano" name="grupo" id="rb3">
                <label for="rb3"> 3°Ano</label>
                <!--utilizar o for da tag label com o id é uma boa pratica de programacao-->

                <br><br> Interesses:
                <input type="checkbox" name="inter" value="Jogos"> Jogos
                <input type="checkbox" name="inter" value="Seriados"> Seriados
                <input type="checkbox" name="inter" value="Livros"> Livros
                <br><br>
                <input type="reset" value="Limpar Campos">
                <input type="submit" value="Cadastrar">
            </fieldset>
            <br><br>
            <a href="index.php"> Voltar</a>
        </center>
    </form>
    <!--Principais regras:  1= tudo dentro da tag form faz parte de um formulario
                            2= sempre use a propriedade name para classicar os dados informados
                            3= sempre utilize ancoras para navegação entre as paginas-->
</body>

</html>