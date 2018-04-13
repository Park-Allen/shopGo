<?php
namespace app\index\controller;

use think\Controller;

class UserController extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function doLogin()
    {

        return $this->fetch('login-page');
    }

    public function register()
    {
      return $this->fetch('reg-page');
    }

    public function sell_accounts()
    {
        if(request()->isPost()){
          $post       = input('post.');
          // if($post['goods_type']==""){
          //     return json(['code'=>-1,'msg'=>"请选择种族"]);
          // }
          // if($post['goods_price']==""){
          //     return json(['code'=>-1,'msg'=>"请填写你出售价格"]);
          // }
          // if($post['goods_lieve']==""){
          //     return json(['code'=>-1,'msg'=>"请输入角色等级"]);
          // }
          // if($post['goods_job']==""){
          //     return json(['code'=>-1,'msg'=>"请选择职业"]);
          // }

          return json(['code'=>1,'data'=>$post]);
        }
      return $this->fetch('sell-account');
    }

    public function game_user(){
        if(request()->isPost()){
            $post       = input('post.');
            return json(['code'=>1,'data'=>$post]);
        }
      return $this->fetch();
    }

    public function game_img()
    {
      return $this->fetch();
    }

}
