<?php
require 'vendor/autoload.php';

$less = new lessc;
$less->addImportDir('parts');
$less->compileFile('r-php.less', 'r-php.css');
