<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\Component\AuthComponent;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class MyAuthComponent extends AuthComponent
{
    public $name = "MyAuth";

    public function initialize(array $config)
    {
        parent::initialize($config);
        $defaults = [
            "authorize" => "Controller",
            "authenticate" => [
                "Form" => [
                    "userModel" => "Users",
                    "fields" => [
                        "username" => "name",
                        "password" => "password",
                    ],
                ],
            ],
            "loginRedirect" => [
                "controller" => "Lunch",
                "action" => "index",
                "prefix" => "admin"
            ],
            "logoutRedirect" => [
                "controller" => "Users",
                //ログイン画面に戻すで良いと思う
                "action" => "login",
                "prefix" => false
           ],
            "loginAction" => [
                "controller" => "Users",
                "action" => "login",
                "prefix" => false
           ],
            "authError" => "ログインしてください",
            "flash" => [
                "key" => "auth",
                "element" => "error",
                "duplicate" => false
           ],
        ];
        foreach ($config as $key => $value){
            if($value !== null){
                unset($defaults[$key]);
            }
        }
        $this->config($defaults);
    }
}