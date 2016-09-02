<?php
/**
 * Created by PhpStorm.
 * User: yonghao
 * Date: 2016/8/22
 * Time: 23:11
 */

namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {

    public function index(){
        $admin_user=M('admin')->select();
        $this->assign('admin_user',$admin_user);
        $this->display();
    }

    public function userAdd(){
        if(IS_AJAX){

        }else{
            $this->display();
        }
    }


    /**
     * @function 获取当前日期
     * @date:2016-9-2
     **/
    public function getServerDate(){
        return date("Y-m-d H:i:s");
    }

}