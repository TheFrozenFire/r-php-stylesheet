<?php
require 'vendor/autoload.php';

$less = new lessc;
$less->addImportDir(__DIR__.'/parts/');
$less->compileFile('r-php.less', 'r-php.css');
