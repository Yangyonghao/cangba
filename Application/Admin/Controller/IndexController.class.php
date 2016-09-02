<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends AdminController {

    protected $module_model;
    public function _initialize(){
        $this->module_model=M('module');
    }

    public function index(){
        if(empty($_SESSION['u_msg'])){
            //param：url 参数 跳转时间 提示信息
            $this->redirect('Login/login');

        }else{

            $this->display();
        }
    }

    /**
     * @function:角色列表
     * @author:yangyh
     * @date:2016/9/2
     * **/
    public function role(){
        $this->display();
    }

    /**
     * @function:权限列表
     * @author:yangyh
     * @date:2016/9/2
     */
    public function auth(){

        $auth_list=$this->module_model->where(array('status'=>1))->select();
        $this->assign('auth_list',$auth_list);
        $this->display();
    }

    /**
     * @function:添加权限
     * @author:yangyh
     * @date:2016/9/2
     * **/
    public function authAdd(){

        if(!empty($_POST)){
            $data=[
                'module_name'=>I('post.auth_name'),
                'module_url'=>I('post.auth_url'),
                'level'=>I('post.auth_level'),
                'pid'=>I('post.pid'),
                'add_time'=>$this->getServerDate(),
                'status'=>1
            ];
            $ok_msg=$this->module_model->add($data);
            if($ok_msg){
                $this->success('添加成功!','/Index/auth');
            }else{
                $this->error('添加失败!','/Index/auth');
            }
        }else{
            $this->display();
        }
    }
}