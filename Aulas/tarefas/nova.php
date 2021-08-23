<html>

<head>
    <title>Sistema Gerenciamento de Tarefas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="">
        <fieldset class="caixa">
            <h3 class="central_text">Sistema Gerenciamento de Tarefas</h3>
            <div class="grid_4_col">
                <div class="grid_1_col">Tarefa
                    <input name="cpTarefa" style="width: 300px;">
                </div>
                <div class="grid_1_col">Inicio
                    <input type="date" name="dataInicio" style="width: 130px;">
                </div>
                <div class="grid_1_col">Fim
                    <input type="date" style="width: 130px" name="dataFim">
                </div>
                <div class="grid_1_col">
                    <input name="botao" type="submit" value="Cadastrar" style="width: 130px;" class="button_N">
                </div>
            </div>
            <div class="grid_1_col">
                <input type="submit" name="botao" value="Voltar" class="button_B">
            </div>
        </fieldset>
    </form>
</body>

</html>

<?php
    if(isset($_GET['botao']) && $_GET['botao']=='Voltar'){
        header('Location: index.php');
    }
?>