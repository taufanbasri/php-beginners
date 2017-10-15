<?php

class Connection
{
  public static function make()
  {
    try {
      return new PDO('mysql:host=localhost;port=33060;dbname=php_beginner', 'homestead', 'secret');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}
