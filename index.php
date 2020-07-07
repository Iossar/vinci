<?php

require_once 'vendor/autoload.php';
require_once 'config.php';
require_once 'app/controllers/GitController.php';
require_once 'app/controllers/UserController.php';
require_once 'app/models/User.php';
require_once 'app/models/Database.php';

use app\controllers\GitController;
use app\controllers\UserController;
use app\models\Database;

new Database();
$callback = new GitController();
$users = $callback->getUsers();


try {
    $result = UserController::parser($users);
    echo $result;
} catch (\Exception $e) {
    return $e->getMessage();
}