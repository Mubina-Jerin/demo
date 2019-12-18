<?php

//define('WEBROOT',str_replace("Webroot/index.php","",$_SERVER["SCRIPT_NAME"]));
//var_dump($_SERVER["SCRIPT_FILENAME"]);
//echo "<br>";
define('ROOT', str_replace("index.php","",$_SERVER["SCRIPT_FILENAME"]));
//echo "<br>";
//var_dump(ROOT);
//demo/index.php/HomeController/create/

require(ROOT.'/config/core.php');
require(ROOT.'/router.php');
require(ROOT .'/request.php');
require(ROOT.'/dispatcher.php');

$dispatch=new Dispatcher();
$dispatch->dispatch();
var_dump("I am here");
?>