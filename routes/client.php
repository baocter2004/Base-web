<?php

use Hp\BaseWeb\Controllers\Client\HomeController;

$router->get('/',               HomeController::class . '@index');