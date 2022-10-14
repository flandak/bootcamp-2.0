<?php
$page_title = 'Shopping list';
$page = 'home';
$page = ($_GET['page']) ?? $page;


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
    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=form">Form</a>
    </nav>
    
    <h1>
        <?=$page_title?>
    </h1>
 
        <?= $page == 'home' ? include 'home.php' : ""  ?>
        <?= $page == 'form' ? include 'form.php' : ""  ?>

</body>
</html>