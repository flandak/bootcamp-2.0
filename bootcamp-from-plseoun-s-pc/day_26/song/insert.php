
<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';

$song = new Song;
// var_dump($_POST);

$song->name = $_POST['name'] ?? $song->name;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;
// flash the success message
$_SESSION['success_message'] = 'Saving successful';

$id = insert($song);
var_dump($id);

