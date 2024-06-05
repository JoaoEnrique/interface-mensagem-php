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
