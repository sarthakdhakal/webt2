<?php

$title= 'Add person';

ob_start();
require 'add.php';
$content= ob_get_clean();

require 'layout.php';
