<?php
namespace App\Src;

class Whatsapp implements IMensageiro{
    function enviar(string $mensagem): bool{
        echo "A mensagem '" . $mensagem . "' foi enviada pelo Whatsapp";
    }
}