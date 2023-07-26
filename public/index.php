<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

/* YOUR CODE (Instructions in README.md) */

echo $root;
echo nl2br("\n\n");
echo APP_PATH;
echo nl2br("\n\n");
echo FILES_PATH;
echo nl2br("\n\n");
echo VIEWS_PATH;
echo nl2br("\n\n");

/*
 req'd files
    App.php - includes logic functions
    ...
*/
require_once(APP_PATH.'App.php');

read_transactions();