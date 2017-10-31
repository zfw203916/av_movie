<?php
/**
 * Created by PhpStorm.
 * User: FrankZhang
 * Date: 10/27/2017
 * Time: 3:15 PM
 */

namespace app\index\controller;
use app\index\model\ListVideo;
class VideoController extends MonBaseController
{
    public function index(){

        $map['vod_status'] = 1;
        $list = ListVideo::all($map);
        dump($list);die;
        return view();
    }

}