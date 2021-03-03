<?php

$title= 'Message list';

ob_start();
require 'listmessages.php';
$content= ob_get_clean();
require 'layout.php';


?>