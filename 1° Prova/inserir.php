<html>

<head>
    <title>Central de Documentos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form method="POST">
        <fieldset class="caixa grid_4_rows">
            <div class="grid_1_col central_text" style="font-weight: bolder; font-size: 20px; margin: auto">
                <span>Central de Documentos</span>
            </div>
            <div class="grid_2_col">
                <div class="grid_1_col" style="margin: auto">
                    <label for="cpDocumento">
                        <strong>Insira os Dados</strong>
                        <input style="width:120px" id="cpDocumento" name="cpDocumento">
                    </label>
                </div>
                <div class="grid_1_col" style="margin: auto">
                    <input type="submit" class="button" name="botao" value="Cadastrar">
                </div>
            </div>
            <div id="regras">
                <p><b>Regra 1:</b> O número do documento deve ter 5 dígitos no total. Exemplo: 23265. Neste exemplo, o
                    primeiro dígito é o 2, o segundo é o 3, o terceiro é o 2 e assim por diante. </p>
                <p><b>Regra 2:</b> O segundo dígito elevado a 4 deve ser divisível por 3. A mesma regra deve valer para o quarto
                    dígito. </p>
                <p><b>Regra 3:</b> O terceiro dígito não pode ser 0 nem 1. </p>
                <p><b>Regra 4:</b> A soma do terceiro com o último dígito deve ser maior que 3. </p>
                <p><b>Regra 5:</b> O primeiro dígito deve necessariamente ser 2, 5 ou 9.</p>
            </div>
            <div class="divButton">
                <input class="buttonBack" type="submit" name="botao" value="Voltar">
            </div>
        </fieldset>
    </form>
</body>

</html>

<?php
if(isset ($_POST['botao']) && $_POST['botao'] == 'Cadastrar'){
   echo"idont";
}
if(isset ($_POST['botao']) && $_POST['botao'] == 'Voltar'){
    header('Location: index.php');
}
?>