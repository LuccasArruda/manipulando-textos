<?php

$url = 'https://www.google.com.br';

$URLSegura = str_starts_with($url, 'https');
$URLdoBrasil = str_ends_with($url, 'br');

echo ($URLSegura ? '� uma URL Segura' : 'N�o � uma URL Segura') . PHP_EOL;
echo ($URLdoBrasil ? '� uma URL brasileira' : 'N�o � uma URL brasileira');