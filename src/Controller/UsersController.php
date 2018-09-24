<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Log\Log;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class UsersController extends AppController
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent("MyAuth");
        $this->MyAuth->allow(["login","register"]);


        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    public function login()
    {
        $user = $this->Users->newEntity();
        if($this->request->is('post')){
            //IDとパスワードのチェック
            $user = $this->MyAuth->identify();
            if($user){
                //正当なユーザーなのでセッションに代入
                $this->MyAuth->setUser($user);

                return $this->redirect($this->MyAuth->redirectUrl());
            }else{
                $this->Falsh->error(__('ID、またはパスワードが間違っています'));
            }
        }
        $this->set(compact('user'));
    }

    public function register()
    {
        $user = $this->Users->newEntity();
        if($this->request->is('post')){
            //リクエストデータに基づく新規ユーザー作成
            $user = $this->Users->patchEntity($user,$this->request->data);
            if($this->Users->save($user)){
                $this->MyAuth->setUser($user);
                $this->Flash->success("ユーザー登録が完了しました");

                return $this->redirect($this->MyAuth->redirectUrl());
            }
            $this->Flash->error(__('ユーザー登録に失敗しました'));
        }
        //画面表示
        $this->set(compact('user'));
    }
}
