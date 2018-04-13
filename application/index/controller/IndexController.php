<?php
namespace app\index\controller;

use think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function product_list()
    {
        return $this->fetch();
    }

    public function item()
    {
        return $this->fetch();
    }

    public function view_goods()
    {
        return json(['code' => 1]);
    }

}
