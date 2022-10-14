<?php
require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'model/Region.php';

connect('localhost', 'world','root', '');

$id = 5;
$query = "SELECT * FROM `regions` WHERE `id` = ?";
$southAmerica = select_one($query,[$id], Region::class);

$southAmerica->slag = 'new_slag';
$southAmerica->update();

header('Content-type: application/json');
echo json_encode($southAmerica);