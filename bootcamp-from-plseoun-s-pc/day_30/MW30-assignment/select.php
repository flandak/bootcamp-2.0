<?php

require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('model/Country.php');

connect('localhost', 'world', 'root', '');

$name = $_GET["name"] ?? '%';
$continent = $_GET["continent"] ?? '%';
$population = $_GET["population"] ?? 0;

$query = "SELECT * FROM `countries` WHERE `name` LIKE ? AND 'continent' LIKE ? AND `population` > ?"; // the where 1 condition could be useful for you
$queryParams = [$name . '%', $continent . '%', $population];



// if(isset($name)){
//     $query =$query . 'AND `name` LIKE ?';
//     $queryParams[] = $name . '%';
// }
// if(isset($continent)){
//     $query =$query . 'AND `continent` LIKE ?';
//     $queryParams[] = $continent . '%';
// }
// if(isset($population)){
//     $query =$query . 'AND `population` LIKE ?';
//     $queryParams[] = $population;
// }
// write your code here
 //create an array

 //tenhle kod me zbavi prvnich dvou radku kdyz odkomentuju 9-11 radek
//  if (isset($_GET["name"])){
//     $name = $_GET["name"];
//     array_push($queryParams, $name);

//   }
  
//   if (isset($_GET["continent"])){
//     $continent = $_GET["continent"];
//     array_push($queryParams, $continent);
//   }
  
//   if (isset($_GET["population"])){
//     $population = $_GET["population"];
//     array_push($queryParams, $population);
//   }

 $resultList = select($query, $queryParams, Country::class);
 
 header('Content-type: application/json');
 echo json_encode($resultList);
