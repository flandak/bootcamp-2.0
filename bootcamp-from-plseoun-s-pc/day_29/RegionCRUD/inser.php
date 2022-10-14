<?php
require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'model/Region.php';

connect('localhost', 'world','root', '');

$myRegion = new Region();
$myRegion->name = "my name region";
$myRegion->slag = 'my_new_region';
$myRegion->insert();


header('Content-type: application/json');
echo json_encode($myRegion);

