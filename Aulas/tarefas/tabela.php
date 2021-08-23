<html>

<head>
    <title>Sistema Gerenciamento de Tarefas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="">
        <fieldset class="caixa">
            <h3 class="central_text">Sistema Gerenciamento de Tarefas</h3>
            <div class="grid_2_col_P">
                <div class="grid_1_col">
                    Digite a tarefa a ser Localizada
                    <input style="width: 200px" name="cpTarefa">
                </div>
                <div style="margin: auto">
                    <input class="button_N" type="submit" name="botao" value="Buscar">
                </div>
            </div>
            <table>
                <tr>
                    <th>Tarefa</th>
                    <th>incio</th>
                    <th>Fim</th>
                    <th>Status</th>
                    <th>Deseja..</th>
                </tr>
                <tr>
                    <td>Formatar o pc 02 com o Windows 10</td>
                    <td>20-08-2021</td>
                    <td>24-08-2021</td>
                    <td>Pendente</td>
                    <td><a href="#">Finalizar</a></td>
                </tr>

            </table>
            <div class="grid_1_col">
                <input type="submit" value="Voltar" class="button_N" name="botao">
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