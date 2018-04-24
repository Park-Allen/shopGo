<?php

namespace app\index\model;

use think\Model;

class Goods extends Model
{
    protected $name = "goods";

    public function set_Goods_job($value)
    {
        $sex = [0 => '守护', 1 => '守护', 2 => ' 剑星', 3 => ' 杀星', 4 => ' 弓星', 5 => ' 护法', 6 => ' 治愈', 7 => ' 魔道', 8 => ' 精灵', 9 => ' 吟游', 10 => ' 枪炮', 11 => ' 拖拉机'];
        return $sex[$value];
    }

    public function set_goods_type($value)
    {
        $type = [0 => '天族', 1 => '天族', 2 => ' 魔族'];
        return $type[$value];
    }

    public function set_goods_area()
    {
        $area = [0 => '傲视八星', 1 => '傲视八星', 2 => ' 复仇之花', 3 => '决战之地', 4 => ' 异界之王', 5 => '谁与争锋', 6 => ' 提亚马特', 6 => ' 诸神传说'];
        return $area[$value];
    }

}
