<?php
namespace app\index\controller;

use think\Controller;

class Base extends Controller
{
    protected $check_url = ['User/login', 'User/register', 'User/dologin'];

    public function __construct()
    {
        parent::__construct();
        $this->check_user();
    }

    public function check_user()
    {
        if (!session('UserInfo')) {
            $controller = request()->controller();
            $action     = request()->action();
            $url        = $controller . "/" . $action;
            if (!in_array($url, $this->check_url)) {
                echo "123";
                $this->redirect('user/login');
            }

            //$this->redirect('user/dologin');
        }
    }
}
