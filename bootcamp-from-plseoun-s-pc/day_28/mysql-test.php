<?php

require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Country.php';
require_once 'City.php';
// connect to the database
connect(
  'localhost', // server URL
  'world',     // database name
  'root',      // username
  ''           // password
);

// now DB library remembers the connection, keeps it in its singleton

$results = select(
  'SELECT * FROM `countries` WHERE `population` > ?',    //SQL query
  [20000000],
  'Country' // essentially makes all the results Country objects? Otherwise, they're standar objects
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Countries with population over 20M</h1>
  <ul>
    <?php foreach ($results as $country) : ?>
      <li>
        <?= $country->name ?><br>
        Capital: <?= $country->getCapitalCity()->name ?>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>