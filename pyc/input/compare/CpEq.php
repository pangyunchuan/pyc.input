<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/18 0018
 * Time: 09:34
 */

namespace pyc\input\compare;
//相等
class CpEq extends CompareBase
{
    public function compare($v1,$v2)
    {
        return $v1 == $v2;
    }
}