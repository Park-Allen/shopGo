<?php

namespace app\index\model;

use think\Model;

class User extends Model
{
    protected $name = "user";

    protected function setPwdAttr($value)
    {
        return md5($value);
    }
}
