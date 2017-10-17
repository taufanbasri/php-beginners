<?php require 'partials/head.php'; ?>

    <h1>All Users</h1>

    <form action="/users" method="post">
      <input type="text" name="name" value="">
      <button type="submit">Submit</button>
    </form>

    <br><br>

    <?php foreach ($users as $user) : ?>
      <li><?= $user->name; ?></li>
    <?php endforeach; ?>

<?php require 'partials/footer.php'; ?>
