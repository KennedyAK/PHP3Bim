<html>

<head>
    <title>Central de Documentos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form>
        <fieldset class="caixa">
            <h3 class="central_text">Central de Documentos</h3>
            
            <table>
                <tr>
                    <th>Documento</th>
                    <th>Codigo</th>
                </tr>
                <tr>
                    <td>Documento 01</td>
                    <td>23265</td>
                </tr>
            </table>
            <div class="divButton">
                <input type="submit" value="Voltar" class="buttonBack" name="botao">
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