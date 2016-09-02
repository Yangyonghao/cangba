<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        $this->display();
    }

    public function getTest(){
        if($_POST){
            $data=array(
                'old' =>I('post.old'),
                'edu' =>I('post.edu'),
                'work' =>I('post.work'),
                'income' =>I('post.income'),
                'finance_proportion' =>I('post.finance_proportion'),
                'finance_state' =>I('post.finance_state'),
                'invest_amount' =>I('post.invest_amount'),
            );
            //键值对
            foreach($data as $key=>$val){
                $data_arr=[
                    'uid'=>12,
                    'topic'=>$key, //题目
                    'score'=>$val //对应的分数
                ];
                M('topic')->add($data_arr);
            }
            $total_score=M('topic')->where(array('uid'=>12))->sum('score');

            if(!empty($total_score)){
                $condition=[
                    'total_score'=>$total_score,       //答题分数
                    'topic_time'=>date("Y-m-d H:i:s") //答题时间
                ];
                $bool_msg=M('user')->where(array('id'=>12))->save($condition);
            }

            if($bool_msg==true){
                $this->success('提交成功','/Home/Index/getTest');
            }else{
                $this->error('提交失败','/Home/Index/getTest');
            }
        }
        $this->display();
//        if($_POST){
//            $data=array(
//                'old' =>I('post.old'),
//                'edu' =>I('post.edu'),
//                'work' =>I('post.work'),
//                'income' =>I('post.income'),
//                'finance_proportion' =>I('post.finance_proportion'),
//                'finance_state' =>I('post.finance_state'),
//                'invest_amount' =>I('post.invest_amount'),
//                'add_time'=>date("Y-m-d H:i:s")
//            );
//            $aa=array_sum($_POST);
//            $data['total_score']=$aa;
//            $ok=M('test')->add($data);
//            if($ok){
//                $this->success('提交成功','/Home/Index/getTest');
//            }else{
//                $this->error('提交失败','/Home/Index/getTest');
//            }
//        }
//        $this->display();
    }
}