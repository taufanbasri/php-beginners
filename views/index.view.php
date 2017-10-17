<?php require 'partials/head.php'; ?>

    <h1>Submit Your Name</h1>

    <form action="/names" method="post">
      <input type="text" name="name" value="">
      <button type="submit">Submit</button>
    </form>

    <br><br>

    <?php foreach ($users as $user) : ?>
      <li><?= $user->name; ?></li>
    <?php endforeach; ?>

<?php require 'partials/footer.php'; ?>
