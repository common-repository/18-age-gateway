<?php

require dirname(__FILE__).'/../vendor/autoload.php';

use jucksearm\barcode\Barcode;

Barcode::html('https://github.com/jucksearm/php-barcode', 'C128');