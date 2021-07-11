<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
define("BASE_URL","http://localhost/trello");
require_once("./libs/Router.php");
require_once ("./models/Hydrate.php");
$route = new Router();
$route->route();
$d = new RowDao();
$d->findAll();
