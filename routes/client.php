<?php

use tuankiet\src\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');