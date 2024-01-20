<?php

$email = 'luccas_arruda@outlook.com.br';
$senha = 'sdafas23FD';

$posicaoArroba = strpos($email, '@');
$tamanhoSenha = strlen($senha);

$nome = substr($email, 0, $posicaoArroba);
$dominio = substr($email, $posicaoArroba + 1);

echo ($tamanhoSenha < 8 ? 'Senha Insegura' : 'Senha segura :)') . PHP_EOL;

var_dump(strtoupper($nome));
var_dump($dominio);

list($nomeUsuario, $sobrenomeUsuario) = explode('_', $nome);
var_dump($nomeUsuario);
var_dump($sobrenomeUsuario);

$csv = 'Luccas Arruda,19,2004,Araras';

list($nome, $idade, $dtNascimento, $cidade) = explode(',', $csv);
var_dump($nome);
var_dump($idade);
var_dump($dtNascimento);
var_dump($cidade);
