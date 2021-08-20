<?php
$alunos = array();

array_push( //é um método para inserir um vetor dentro de outro
    $alunos,
    array(
        'Nome' => 'Antonio Kennedy', //Essa é só uma forma de alterar o nome da posição
        'Idade' => '18'
    )
);

array_push(
    $alunos,
    array(
        'Nome' => 'Kevin',
        'Idade' => '23'
    )
);

print_r($alunos);
echo "<br><br>";

print_r($alunos[1]);
echo "<br><br>";

print_r($alunos[0]['Nome']);
echo "<br><br>";
