<?php

require "./vendor/autoload.php";

use com\iesebre\dam2\pa201415\alex\SayHello;
use Illuminate\Filesystem\Filesystem;

$fs = new Filesystem();

$hello = new SayHello();

$hello->sayHello();

?>