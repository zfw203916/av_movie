<?php

/**
 * Created by PhpStorm.
 * User: FrankZhang
 * Date: 10/27/2017
 * Time: 11:29 AM
 */
namespace app\common\controller;
use think\Controller;
class Base extends Controller
{
    protected function _initialize(){
        $this->assign([
            'title'=>'易游AV',
            'v_alt'=>'AV'
        ]);
    }

}