 <?php
    $frutas = [
        'laranja',
        'maça',
        'abacaxi'
    ];
    print_r($frutas);

    $carros[0][0]='GM';
    $carros[0][1]='Onix';

    $carros[1][0]='Ford';
    $carros[1][1]='Fiesta';
    echo "<br><br>".$carros[0][1]."<br><br>";

    echo end ($carros[1]); //Mostra o ultimo carro da coluna 1
