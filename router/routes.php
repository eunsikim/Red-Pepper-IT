<?php

require_once($_SERVER['DOCUMENT_ROOT']."/router/router.php");

require_once($_SERVER['DOCUMENT_ROOT']."/modules/appRoutes.php");
//  GET
get('/', './controllers/home.php');

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','./controllers/404.php');
