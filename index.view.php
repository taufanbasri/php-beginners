<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP for Beginners</title>
    <style media="screen">
      header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <!-- eficient -->
    <ul>
      <?php foreach ($names as $name) : ?>
        <li><?= $name  ?></li>
      <?php endforeach; ?>
    </ul>

    <!-- u can use like this too -->
      <!-- <ul>
        <?php
          foreach ($names as $name) {
            echo "<li>$name</li>";
          }
        ?>
      </ul> -->
  </body>
</html>
