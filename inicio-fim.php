<?php

$url = 'https://www.google.com.br';

$URLSegura = str_starts_with($url, 'https');
$URLdoBrasil = str_ends_with($url, 'br');

echo ($URLSegura ? 'É uma URL Segura' : 'Não é uma URL Segura') . PHP_EOL;
echo ($URLdoBrasil ? 'É uma URL brasileira' : 'Não é uma URL brasileira');