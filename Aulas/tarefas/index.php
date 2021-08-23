<html>

<head>
    <title>Sistema Gerenciamento de Tarefas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form>
        <fieldset class="caixa">
            <h3 class="central_text">Sistema Gerenciamento de Tarefas</h3>
            <div class="grid_2_col">
                <div class="central_text">
                    <input class="button" type="submit" value="Nova Tarefa" name="botao">
                </div>
                <div class="central_text">
                    <input class="button" type="submit" value="Ver Tarefas" name="botao">
                </div>
            </div>
        </fieldset>
    </form>
</body>

</html>

<?php
    if(isset($_GET['botao']) && $_GET['botao']=='Nova Tarefa'){
        header('Location: nova.php');
    }
    if(isset($_GET['botao']) && $_GET['botao']=='Ver Tarefas'){
        header('Location: tabela.php');
    }
?>