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
                    <th>Documentos</th>
                </tr>

                <?php
                session_start();
                //session_destroy();
                if (isset($_SESSION['Documento'])) {
                    $listaR = $_SESSION['Documento'];
                } else {
                    $listaR = array();
                }
                foreach ($listaR as $id) :
                ?>
                    <tr>
                        <td>
                            <?php
                            //$codDoc = print_r($id['0']['codigo_Documento'], true); <--- err
                            //print_r($codDoc); <--- err
                            //var_export($listaR[0][0]['codigo_Documento'][0]); <--- isso aqui q salvo
                            print_r($id[0]['codigo_Documento'][0]);
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
            <div class="divButton">
                <input type="submit" value="Voltar" class="buttonBack" name="botao">
            </div>
        </fieldset>
    </form>
</body>

</html>

<?php
if (isset($_GET['botao']) && $_GET['botao'] == 'Voltar') {
    header('Location: index.php');
}
?>