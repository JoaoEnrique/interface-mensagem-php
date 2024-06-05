# Interface Mensageiro
```php
<?php
namespace App\Src;

interface IMensageiro {
    public function enviar(string $mensagem): bool;
}
```

# Mensageiro Factory
```php
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
```

# Email
```php
<?php
namespace App\Src;

class Email implements IMensageiro{
    function enviar(string $mensagem): bool{
        echo "A mensagem '" . $mensagem . "' foi enviada pelo Whatsapp";
    }
}
```

# SMS
```php
<?php
namespace App\Src;

class SMS implements IMensageiro{
    function enviar(string $mensagem): bool{
        echo "A mensagem '" . $mensagem . "' foi enviada pelo SMS";
    }
}
```


# Whatsapp
```php
<?php
namespace App\Src;

class Whatsapp implements IMensageiro{
    function enviar(string $mensagem): bool{
        echo "A mensagem '" . $mensagem . "' foi enviada pelo Whatsapp";
    }
}
```


# index.php
```php
<?php
require 'vendor/autoload.php';

use App\Src\IMensageiro;
use App\Src\MensageiroFactory;

$mensageiro = new MensageiroFactory();
$email = MensageiroFactory::criar('email');
$sms = MensageiroFactory::criar('sms');
$whatsapp = MensageiroFactory::criar('whatsapp');
```
