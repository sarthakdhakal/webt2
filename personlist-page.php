<?php

$title= 'Person list';

ob_start();
require 'list.php';
$content= ob_get_clean();
require 'layout.php';


?>