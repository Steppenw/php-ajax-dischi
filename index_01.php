<?php

include './db/data.php';

/*foreach ($albums as $item) {
  //var_dump($item);
  foreach ($item as $album) {
    echo $album . '<br />';
  }
}*/

function show($list) {

  foreach ($list as $item) {
    echo '<div class="album flex">';
    echo '<img class="border" src="' . $item['poster'] . '" />';
    echo '<h3>' . $item['title'] . '</h3>';
    echo '<h4>' . $item['author'] . '</h4>';
    echo '<span>' .$item['year'] . '</span>';
    echo '</div>';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">-->
  <link rel="stylesheet" href="dist/style.css">
  <title>Discs</title>
</head>
<body>

  <div class="flex-col vh-100">

    <header>
      <div class="container">
        <div class="brand flex">
          <img src="imgs/vinyl-2241789_640.png" alt="brand">
          <h1>My Albums</h1>
        </div>
      </div>
    </header>
    
    <main>
      <div class="container">
        <div class="catalog flex border">
          <?php
            show($albums);
          ?>
        </div>
      </div>
    </main>
    
  </div>

</body>
</html>