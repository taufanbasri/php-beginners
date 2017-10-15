<?php

function connectToDb()
{
  try {
    return new PDO('mysql:host=localhost;port=33060;dbname=php_beginner', 'homestead', 'secret');
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

function fetchAllTasks($pdo)
{
  $statement = $pdo->prepare('select * from todos');

  $statement->execute();

  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($data)
{
  echo "<pre>";
  die(var_dump($data));
  echo "</pre>";
}
