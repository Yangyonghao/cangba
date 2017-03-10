<?php
namespace Home\Controller;
use Think\Controller;
use Think\Exception;

class IndexController extends Controller {

    public function index(){

        $this->display();
    }


    public function getFilter($string){
        return str_replace(" ","_",$string);
    }
//        $user=M('user');
//        $memcache=new \Memcache();
//        $memcache->connect('127.0.0.1',11211) or die('memcache链接失败!');
//        $result_arr=$user->field('id,phone,user_name')->limit(0,10)->where(array('status'=>1))->select();

//        $redis=new \Redis();
//        $redis->connect('127.0.0.1','6379') or die('redis链接失败');
//        $redis->connect('192.168.17.234','6379') or die('redis链接失败');
//        $redis->auth("redhat");
//        if($redis->exists('user_id')==false){
//            for ($i=0;$i<count($result_arr);$i++){
//                $redis->lPush('user_id', $result_arr[$i]['id']);
//                $redis->set('user_name_'.$result_arr[$i]['id'],$result_arr[$i]['user_name']);
//                $redis->set('phone_'.$result_arr[$i]['id'],$result_arr[$i]['phone']);
//            }
//        }
//        $redis_option=[
//            'BY'=>'user_id',
//            'SORT'=>'DESC',
//            'GET'=>array('user_name_*','phone_*')
//        ];
//        $redis->lPush('ylf','yangyh');
//        $redis->lPush('ylf','zhangs');
//        $redis->lPush('ylf','lis');
//        $redis->lPush('ylf','wangmz');
//        var_dump($redis->lRange('ylf',0,100));
//        die;
//        var_dump($redis->sort('user_id',$redis_option));
//        die;
//        $redis->hMset('user', ['user_name'=>'潘驼背','user_id'=>'12','sex'=>'男','user_bank'=>'6212000100024561239']);
//        var_dump($redis->hMGet('user',['user_name','user_id','sex','user_bank']));
//        var_dump($redis->hGetAll('user'));
//        die;
//
//        $redis->hSet('user_yang','user_name','杨永豪');
//        $redis->hSet('user_product','user_name','张三三');
//
//        $redis->hSet('user_yang','user_id','15');
//        $redis->hSet('user_product','user_id','16');
//
//        $redis->hSet('user_yang','order_id',201600010002);
//        $redis->hSet('user_product','order_id',201600010001);
//
//        $redis->hSet('user_yang','gender','男');
//        $redis->hSet('user_product','gender','女');
//
//        var_dump($redis->hGetAll('user_yang'));
//        var_dump($redis->hGetAll('user_product')); die;
//
//        if($redis->hExists('user_yang','user_name')){
//
//        }
//        die;
//        $memcache->set('test',$result_arr,0,60);
//        $v=time()+60;
//        if(time()>$v){
//            $memcache->flush();192.168.17.234
//        }

//        $redis->flushDB();
//        # 将数据一一加入到列表中
//        if($redis->exists('website') ==false){
//            $redis->lPush('website', "www.zeddit.com");
//            $redis->lPush('website', "www.alashdot.com");
//            $redis->lPush('website', "www.dnfoq.com");
//        }
//        if($redis->exists('site') ==false){
//            $redis->lPush('site', 2);
//            $redis->lPush('site', 6);
//            $redis->lPush('site', 3);
//        }
//        var_dump($redis->lRange('site',0,10));
//
//        die;
//        var_dump($redis->lRange('website',0,10));
//        var_dump($redis->sort('website',array('ALPHA'=>TRUE)));die;
//
//
//        $redis->set('player',"MPlyaer");
////        $redis->exists('best_player'); //int(0) v
//        $redis->expire('time_to_say_goodbye', 300);
////        $redis->expireAt('player','1477983430');
//        var_dump($redis->persist('time_to_say_goodbye'));
//        die;
//        var_dump($redis->ttl('player'));die;
//
//        var_dump($redis->type('greet_list'));die;
//        var_dump($redis->renameNx('player','best_player'));die;

//        $redis->set('green',"www.cnblogs.com/ikodota");
//        $redis->expire('green',30);
//        var_dump($redis->renameNx('qqqw','aaaa'));die;


//        var_dump ($redis->move('aaaa',1));
//        echo '222';
//        var_dump($redis->ttl('green'));
//        var_dump($redis->rename('green','aaaa'));
//        var_dump($redis->get('aaaa'));
//        var_dump($redis->get('green'));
//        die;


//        $array=[
//            'fruit'=>'apple',
//            'drink'=>'beer',
//            'food'=>'cookie'
//        ];
//        $redis->mset($array);
//        echo $redis->randomKey();die;
//
//        echo '<meta charset="utf-8">';
//        $redis_list=$redis->lRange('greet_list',0,100);
////        $redis->flushDB();die;
//        if(!isset($redis_list) || empty($redis_list)){
//            $redis->lPush('greet_list','hello');
//            $redis->lPush('greet_list','world');
//            $redis->lPush('greet_list','!!!!!');
//            $redis->lPush('greet_list','我艹');
//            $redis->lPush('greet_list','汗暗含');
//        }
////        var_dump($redis->keys('*'));die;
//        var_dump($redis->lRange('greet_list',0,100));die;
//        var_dump($redis->rpoplpush('msg','greet_list'));
//        var_dump($redis->lRem('greet_list','我艹',2));die;
//        $redis->lPushx('greet_list','老王');
//-        $redis->lLen('greet_list');
//        var_dump();
//        die;
//        $redis->rPush('greet_list','ni是谁','woyebuzhidao','你呢');
//        $redis->lSet('greet_list',15,'杨永豪');
//        var_dump($redis->lTrim('greet_list',0,12));
//        var_dump($redis->lIndex('greet_list',12));//返回下标等于12的元素
//        var_dump($redis->lInsert('greet_list','after','world','苍井优'));//返回下标等于12的元素

//        var_dump($redis->lSet('greet_list',15,'杨永豪'));
//        var_dump($redis->lRem('greet_list','ni是谁',-1));
//        var_dump($redis->lRange('greet_list',0,100));die;
//
//        $greet_num=$redis->lLen('greet_list');
////        var_dump($greet_num);die;
//        if($redis->lLen('msg')==0){
//            for($i=0;$i<$greet_num;$i++){
//                $redis->brpoplpush('greet_list','msg',$greet_num);
//            }
//        }
//        var_dump($redis->blPop('greet_list1',10));
//        var_dump($redis->lPop('greet_list'));
//        print_r($redis_list);
//        var_dump($redis->lRange('msg',0,100));
//        var_dump($redis->brPop('aaaa',5));
//        var_dump($redis->lRange('msg',0,100));
//        var_dump($abc);
//        var_dump($abc);
//        var_dump($redis->type('greet_list'));
//        die;


//        echo '<br>主题为DEL<br>';
//        $redis->set('myname','yangyh');
//        echo $redis->get('myname');
//        $redis->del('myname');
//        var_dump($redis->get('myname'));
//        echo 'first_key';
//        if(!$redis->exists('first_key')){
//            var_dump($redis->del('first_key'));
//        }
//        #情况三
//        $array_mset=array(
//            'first_key'=>'first_val',
//            'second_key'=>'second_key',
//            'third_key'=>'third_key',
//        );
//        $redis->mset($array_mset);
//        $array_mget=array('first_key','second_key','third_key');
//        var_dump($redis->mget($array_mget));
//
//        die;
//        $redis->flushdb();
//        $redis->flushAll();
//        $array_mset_keys=array(
//            'one'=>1,
//            'two'=>2,
//            'three'=>3,
//            'four'=>4
//        );
//
//        $redis->mset($array_mset_keys);
//        $array_mget_keys=array(
//            'one','two','four','three'
//        );
//
//        var_dump($redis->select(1));
//        var_dump($redis->mget($array_mget_keys)) ;
//        die;
//
//        $redis->expire('one',30);
//        echo $redis->ttl('one');
//        var_dump($redis->keys('*'));
//        die;
//
//        $redis->lPush('toList','Redis');
//        $redis->lPush('toList','Mongodb');
//        $redis->lPush('toList','mysql');
//        $arlist=$redis->lRange('toList',0,5);
//        var_dump($arlist);
//        $user_arr=$user->where(array('status'=>1))->limit('1,10')->select();
//        $redis->set('abc',json_encode($user_arr));
//        $redis_list=json_decode($redis->get('abc'));
//        var_dump($redis_list);
//        die;
//
//
//        $redis->set($aba,serialize($user_arr));
//        var_dump(unserialize($redis->get($aba)));
//
//die;
//        $redis->lPush('test',$user_arr);
//        var_dump($redis->lRange('test',0,10));
//
//        die;
//        $redis->set('user_login','sss');
//        $keys=$redis->keys("*");
//        if($keys['user_login']){
//            $aa=$redis->get('user_login');
//        }
//        var_dump($aa);die;
//        $redis->get('test');
//        echo $redis->ttl('user_login');
//        echo $redis->get('user_login');
//        die;
//        echo '<select style="width: 250px;color: red;">';
//        foreach($out as $k=>$v){
//
//            echo '<option value="{$v.id}">'.$v['phone'].'</option>';
//
//        }
//        echo '</select>';
////        var_dump($result);die;
////        echo count($result);die;
//        die;
//        $this->display();
//    }

    public function getTest(){
        $user=M('user');
        $result_arr=$user->field('id,phone,total_score,topic_time')->where(array('status'=>1))->select();
        print_r($result_arr);die;
        echo '<select style="width: 250px;color: red;">';
        foreach($result_arr as $k=>$v){

            echo '<option value="{$v.id}">'.$v['phone'].'</option>';

        }
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
//        $this->display();
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


    public function getList(){
        $memcache=new \Memcache();
        $memcache->connect('127.0.0.1',11211) or die('memcache链接失败!');
        $user=M('user');
        $result_arr=$user->field('id,phone,total_score,topic_time')->where(array('status'=>1))->select();
        $memcache->set('test',$result_arr);
        $out=$memcache->get('test');
        return $out;
    }

    public function getUserInfo(){
        if(IS_AJAX){
            $post_name=empty($_POST['real_name']) ? 0:$_POST['real_name'];
            $ss=M('user')->select();
            $aa=array();
            foreach ($ss as $k=>$v){
                if(strstr($v['real_name'],$post_name)){
                    $aa[]=$v['real_name'];
                }
            }
            echo json_encode($aa);exit;
        }else{
            $post_name=empty($_POST['real_name']) ? 0:$_POST['real_name'];
            $post_name='啪';
            $ss=M('user')->select();
            $aa=array();
            foreach ($ss as $k=>$v){
                if(strstr($v['real_name'],$post_name)){
                    $aa[]=$v['real_name'];
                }
            }
            $this->display();
        }
    }
}