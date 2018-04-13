<?php
namespace app\index\controller;

use app\index\model\Goods;
use app\index\model\User;
use think\Controller;

class UserController extends Base
{
    public function index()
    {
        return $this->fetch();
    }

    public function login()
    {
        return $this->fetch('login-page');
    }

    public function doLogin()
    {
        if (request()->isPost()) {
            $post = input('post.');
            if ($post['user'] == "") {
                return json(['code' => -1, 'msg' => "帐号不能为空"]);
            }
            if ($post['pwd'] == "") {
                return json(['code' => -1, 'msg' => "密码不能为空"]);
            }
            $user      = new User();
            $have_user = $user->where('user', $post['user'])->find();
            if ($have_user) {
                if ($have_user->pwd == md5($post['pwd'])) {
                    session('UserInfo', $user);
                    return json(['code' => 1, 'msg' => "登陆成功"]);
                }
            } else {
                return json(['code' => -1, 'msg' => "帐号或密码有误"]);
            }
        }

    }

    public function register()
    {
        if (request()->isPost()) {
            $post = input('post.');
            if ($post['nick_name'] == "") {
                return json(['code' => -1, 'msg' => "昵称不能为空"]);
            }
            if ($post['user'] == "") {
                return json(['code' => -1, 'msg' => "帐号不能为空"]);
            }
            if ($post['pwd'] == "") {
                return json(['code' => -1, 'msg' => "密码不能为空"]);
            }
            $user      = new User();
            $have_user = $user->where('user', $post['user'])->find();
            if (!$have_user) {
                $user->allowField(true)->save($post);
                session('UserInfo', $user);
                return json(['code' => 1, 'msg' => "注册成功"]);
            }
        }
        return $this->fetch('reg-page');
    }

    public function sell_accounts()
    {
        if (request()->isPost()) {
            $post = input('post.');
            if ($post['goods_type'] == "") {
                return json(['code' => -1, 'msg' => "请选择种族"]);
            }
            if ($post['goods_price'] == "") {
                return json(['code' => -1, 'msg' => "请填写你出售价格"]);
            }
            if ($post['goods_level'] == "") {
                return json(['code' => -1, 'msg' => "请输入角色等级"]);
            }
            if ($post['goods_job'] == "") {
                return json(['code' => -1, 'msg' => "请选择职业"]);
            }
            $goods = new Goods;
            $goods->allowField(true)->save($post);
            return json(['code' => 1, 'data' => $post]);
        }
        return $this->fetch('sell-account');
    }

    public function game_user()
    {
        if (request()->isPost()) {
            $post = input('post.');
            return json(['code' => 1, 'data' => $post]);
        }
        return $this->fetch();
    }

    public function game_img()
    {

        return $this->fetch();
    }

    public function uploads()
    {
        // 获取表单上传文件
        $files = request()->file('image');
        foreach ($files as $file) {
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move($_SERVER['DOCUMENT_ROOT'] . '/' . 'uploads');
            if ($info) {
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
                echo $info->getFilename();
            } else {
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
    }

}
