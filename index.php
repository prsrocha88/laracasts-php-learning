<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Use App\Core\{Router, Request};

Router::load('app/routes.php')->direct(Request::uri(), Request::method());