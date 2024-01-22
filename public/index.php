<?php

require_once "../vendor/autoload.php" ; 

use Itshark\Mvc\core\bootstrap;
use Itrax\DbWrapper\dbwrapper;



(new bootstrap()) ; 

$db = new dbwrapper();


?>