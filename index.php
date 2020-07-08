<?php

require_once 'vendor/autoload.php';
require_once 'config.php';

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