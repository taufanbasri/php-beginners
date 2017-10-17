<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};
// use App\Core\Request;

Router::load('app/routes.php')
  ->direct(Request::uri(), Request::method());
