<?php

function geraEmail(string $nome): void{
    //heredoc
    $conteudoEmail = <<<FINAL

        Olá $nome!

        Estamos entradno em contato para
        {motivo do contato}

        {assinatura}

    FINAL;

    //nowdoc
    $bemVindo = <<<'FINAL'
        Bem vindo $nome!
    FINAL;

    echo $conteudoEmail;
    echo $bemVindo;
}

geraEmail('Luccas');