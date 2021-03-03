<?php

require 'loadTemplate.php';
require $_GET['page'].'.php';
$tempVars =[
    'title'=> $title,
    'content'=> $content
];
echo loadTemplate('layout.php', $tempVars);


?>