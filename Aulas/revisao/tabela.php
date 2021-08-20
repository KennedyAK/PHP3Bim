<html>

<head>
    <title>Visualizar Cadastros</title>
</head>

<body>
    <center>
        <form>
            <table border="1">
                <tr>
                    <th>Nome</th>
                    <th>Data Nascimento</th>
                    <th>Sexo</th>
                    <th>Serie</th>
                    <th>Interesses</th>
                </tr>

                <?php
                session_start();
                if (isset($_SESSION['lista'])) {
                    $carrega_lista = $_SESSION['lista'];
                } else {
                    $carrega_lista = array();
                }
                foreach ($carrega_lista as $pos):
                ?>

                <tr>
                    <td>
                        <?php
                            print_r($pos[0]['nome']);
                        ?>
                    </td>
                    <td>
                    <?php
                            print_r($pos[0]['data']);
                        ?>
                    </td>
                    <td>
                    <?php
                            print_r($pos[0]['sexo']);
                        ?>
                    </td>
                    <td> 
                    <?php
                            print_r($pos[0]['serie']);
                        ?>
                    </td>
                    <td>
                    <?php
                          foreach($pos[0]['interesses'] as $item){
                              echo "$item\n";
                          }
                        ?>
                    </td>
                </tr>
                <?php endforeach;?>
            </table>
        </form>
    </center>
    <a href="index.php"> Voltar</a>

</body>

</html>