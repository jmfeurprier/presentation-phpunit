<?php

error_reporting(E_ALL | E_STRICT);
ini_set('log_errors', false);
ini_set('display_errors', true);

$rootPath = realpath(__DIR__ . '/../..') . '/';

require($rootPath . 'vendor/autoload.php');

date_default_timezone_set('UTC');
#mb_internal_encoding('UTF-8');
#setlocale(LC_TIME, array('en_CA.utf8'));
