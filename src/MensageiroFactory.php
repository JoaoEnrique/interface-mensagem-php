<?php
namespace App\Src;

class MensageiroFactory {
    public static function criar(string $tipo_mensagem): Usuario {
        switch ($tipo_mensagem) {
            case 'email':
                return new Email();
            case 'sms':
                return new SMS();
            case 'whatsapp':
                return new Whatsapp();
            default:
                throw new Exception('Tipo de mensagem inválida');
        }
    } 
}