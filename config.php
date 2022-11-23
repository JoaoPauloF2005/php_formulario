<?php

define('BASEDIR', dirname(__FILE__, 2));
define('VIEWS', BASEDIR . '/php_formulario/View/modules/');

$_ENV['db']['host'] = 'localhost:3306';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = 'etecjau';
$_ENV['db']['database'] = 'db_sistema';