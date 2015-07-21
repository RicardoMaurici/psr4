<?php

use psr4Test\folder1\First as First;
use psr4Test\folder2\Second as Second;

require_once 'app/start.php';

$p = new First();
echo '<br>';
$s = new Second();