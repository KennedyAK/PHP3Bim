<html>

<head>
    <title>Central de Documentos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form method="POST">
        <fieldset class="caixa">
            <h3 class="central_text">Central de Documentos</h3>
            <div id="painelC">
                <div class="divButton">
                    <input class="button" type="submit" value="Inserir Documento" name="botao_criar">
                </div>
                <div class="divButton">
                    <input class="button" type="submit" value="Visualizar Documentos" name="botao_visualizar">
                </div>
            </div>
        </fieldset>
    </form>
</body>

</html>

<?php
if (isset($_POST['botao_criar']) && ($_POST['botao_criar'] == 'Inserir Documento')) {
    header('location: inserir.php');
}
if (isset($_POST['botao_visualizar']) && ($_POST['botao_visualizar'] == 'Visualizar Documentos')) {
    header('location: tabela.php');
}
?>