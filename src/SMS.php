<?php
namespace App\Src;

class SMS implements IMensageiro{
    function enviar(string $mensagem): bool{
        echo "A mensagem '" . $mensagem . "' foi enviada pelo SMS";
    }
}