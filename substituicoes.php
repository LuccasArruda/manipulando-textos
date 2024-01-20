<?php  

$texto = 'Texto com qualquer coisa porra e caralho';

echo str_replace(
    ['porra', 'caralho'], 
    ['***',], 
    $texto
) . PHP_EOL;

echo strtr($texto, ['porra' => 'c', 'caralho' => 'c']) . PHP_EOL;

//trabalha com caracteres!
echo strtr($texto, 'poxa', '***@') . PHP_EOL;
