<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';

// find the ID of the record we want to edit in the request
$id = $_GET['id'];
// somehow retrieve existing song from some storage
$song = find( $id, 'Song' );
session_start();

if (isset($_SESSION['success_message'])) {
    //retrieve it from
    $success_message = $_SESSION['success_message'];
    unset($_SESSION['success_message']);
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .success-message{
            background-color: lightgreen;
            border: 1px solid green;
            text-align: center;
            
        }
    </style>
</head>
<body>
<?php if (!empty($success_message)) : ?>
    <div class="success-message"><?= $success_message ?></div>
<?php endif; ?>

<form action="update.php?id=<?= $id ?>" method="post">
 
    <!-- display the form prefilled with entity data -->
 
    Name:<br>
    <input type="text" name="name" value="<?= htmlspecialchars((string)$song->name) ?>"><br>
    <br>
 
    Author:<br>
    <input type="text" name="author" value="<?= htmlspecialchars((string)$song->author) ?>"><br>
    <br>
 
    Length:<br>
    <input type="number" name="length" value="<?= htmlspecialchars((string)$song->length) ?>"> seconds<br>
    <br>
 
    Album:<br>
    <input type="text" name="album" value="<?= htmlspecialchars((string)$song->album) ?>"><br>
    <br>
 
    <button type="submit">Save</button>
 
</form>
    
</body>
</html>