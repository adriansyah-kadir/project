<?php

if(!isset($_GET['err'])){
  header('Location: /');
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Error</title>
  </head>
  <body>
    <h1><?= $_GET['err']?></h1>
    <a href="/">return</a>
  </body>
</html>
