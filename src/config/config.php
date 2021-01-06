<?php

date_default_timezone_set('America/Fortaleza');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

// Pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../Models'));

$database_path = realpath(dirname(__FILE__) . '/database.php');
require_once($database_path);
