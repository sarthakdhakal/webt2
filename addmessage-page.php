<?php

$title= 'Add message';

ob_start();
require 'addmessage.php';
$content= ob_get_clean();

require 'layout.php';
