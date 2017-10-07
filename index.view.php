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

    <h1>Task For The Day</h1>

    <ul>
      <li>
        <strong>Name: </strong><?= $task['title']; ?>
      </li>

      <li>
        <strong>Due Date: </strong><?= $task['due']; ?>
      </li>

      <li>
        <strong>Perso Responsible: </strong><?= $task['assigned_to']; ?>
      </li>

      <li>
        <strong>Status: </strong>

        <?php if ($task['completed']) : ?>
          <span>&#9989;</span>
        <?php else : ?>
          <span>Incomplete</span>
        <?php endif; ?>
      </li>
    </ul>
  </body>
</html>
