<?php
/**
 * Created by PhpStorm.
 * User: YHx
 * Date: 2016/11/14
 * Time: 11:17
 */

namespace Admin\Controller;
use Think\Controller;
use UploadFile;

class ArticleController extends Controller
{
    public function add(){
        if($_POST){
            $data['title']=$_POST['art_title'];
            $data['type_id']=$_POST['article_type'];
            $data['content']=$_POST['content'];
            $data['status']=1;
            $data['add_time']=time();
            if(M('article')->add($data)){
                $this->success('添加成功');
            }
        }else{
            $this->display();
        }
    }


    public function upload(){

        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload->autoSub=true;
        $upload->subType='date';
        $upload->dateFormat='Ym';
        $upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');// 设置附
        $info = $upload->Upload('__PUBLIC__/Uploads/upload/');
        dump($info);
    }


}