'Here is the form'

<?php
  $items = [];
  if (isset($_POST['items'])) {
    $items = $_POST['items'];
    // var_dump($items);
  }
  ?>
<form action="form.php" method="post">

    <?php foreach ($items as $i => $text) : ?>
    <input type="text" name="items[<?=$i?>]" value="<?=$text?>">
    <?php endforeach ?>
    <br>
    <input type="text" name="items[<?=count($items)?>]" value=""><br>
    <br>
 <button>Add</button>

</form>