<?php

$telefones = [' awweqe(17) 99789 - 5545','(13) 98189 - 5545','(19) 98229 - 3422'];

$regex = '/^(\([0-9]{2}\)) (9?[0-9]{4} - [0-9]{4})$/';

foreach ($telefones as $telefone){
    $telefoneValido = preg_match(
        $regex, 
        $telefone,
        $verificacoes //opcional
    );

    var_dump($verificacoes);
    if ($telefoneValido){
        echo 'Telefone Válido' . PHP_EOL;
    }
    else{
        echo 'Telefone inválido' . PHP_EOL;
    }

    echo preg_replace(
        $regex,         
        '(XX) \2', 
         $telefone
    ) . PHP_EOL;
}