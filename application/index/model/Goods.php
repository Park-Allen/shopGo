<?php

namespace app\index\model;

use think\Model;

class Goods extends Model
{
    protected $name = "goods";
    protected function setPwdAttr($value)
    {
        return md5($value);
    }
}
