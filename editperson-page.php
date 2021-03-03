<?php

$title= 'Edit person';

ob_start();
require 'edit.php';
$content= ob_get_clean();
require 'layout.php';
