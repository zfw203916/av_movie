<?php
namespace app\index\controller;
use app\index\model\ListVideo;
use app\index\model\User;

/**
 * Class IndexController
 * @package app\index\controller
 * @author Frank
 */
class IndexController extends MonBaseController
{
    /**
     * @return \think\response\View
     * logic:
     *      find all video
     *      find one user
     *      use auth look movie
     * @易游  视频
     */
    public function index()
    {

        $map['vod_status'] = 1;
        $list = ListVideo::all($map);
        $data = User::get(function($query){
            $map['user_status'] = 1;
            $map['user_id'] = $_SESSION['user_id'];
            $query->where($map);
        });
        $this->assign('list',$list);
        $this->assign('data',$data);
        return view();
    }

    /**
     * 检查登入状况.
     * logic:
     *        find one user
     *        use auth look movie
     */
    public function login_check(){
        var_dump($_SESSION['user_name']);die;
        $data = User::get(function($query){
            $query->where(['username'=>trim(input('username')), 'password'=>trim(md5(input('password'))),'status'=>1]);
        });

        if($data['status'] > 0){
            $_SESSION = [
                'username'=>$data['username'],
                'uid'=>$data['uid'],
                'group'=>$data['group']
            ];

            if($_SESSION['group'] == 1) {

                $this->success("登入成功", 'h5email/index');
            } else if($_SESSION['group'] == 2){

                $this->success("登入成功","data/index");

            }else{
                $this->error("登入失败",'index');
            }


        }else if($data['status'] == '0'){
            $this->error('当前用户已被禁用','index');

        }else{
            $this->error('当前用户已被删除','index');

        }


    }


    /**
     * @return \think\response\View
     * @Victor need single h5
     * @This is attract person go here.
     * so must need attach data.考虑抓取数据功能,后期考虑
     */


}
