<?php

$person = [
  'age' => 24,
  'hair' => 'black',
  'career' => 'Web Developer'
];

$person['name'] = "Taufan";

// die(var_dump($person));

// remove
unset($person['age']);

require 'index.view.php';
