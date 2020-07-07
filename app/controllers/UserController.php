<?php


namespace app\controllers;

use app\models\User;

class UserController
{
    public static function parser($users)
    {
        foreach ($users as $user) {
            $model = (object) User::where('github_id', $user['id'])->get();
            if (empty($model[0])) {
                $fields = [
                    'github_id' => $user['id'],
                    'github_login' => $user['login']
                ];
                User::create($fields);
            } elseif ($model[0]->github_login != $user['login']) {
                (object) User::where('github_id', $user['id'])->update(['github_login' => $user['login']]);
            }
        }
        return 'All done';
    }
}