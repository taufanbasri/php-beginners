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
    <ul>
      <li><a href="/about.php">About Page</a></li>
      <li><a href="/contact.php">Contact Page</a></li>
    </ul>
    <h1>My Tasks</h1>
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li>
          <?php if($task->completed) : ?>
            <strike><?= $task->description; ?></strike>
          <?php else : ?>
            <?= $task->description; ?>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
