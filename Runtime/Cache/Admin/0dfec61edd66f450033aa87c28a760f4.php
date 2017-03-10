<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>后台主页</title>
    <script type="application/javascript" src="/Public/js/jquery-3.1.0.min.js"></script>
    <!--<script type="application/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>-->
    <script type="application/javascript" src="/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css" >
</head>
<body style="background-color: #646464">
<div class="container">
    <div class="row">
        <div style="width: 320px;margin: 200px auto;">
            <div class="form-group">
                <label for="name">用户名</label>
                <input type="text" name="user_name" class="form-control" id="name" placeholder="请输入用户名"/>
            </div>
            <div class="form-group">
                <label for="password">密码</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="请输入用户名"/>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" id="btn-submit">登录</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
        </div>
    </div>


    </body>
</html>
<script type="application/javascript">
    $(function(){
       $("#btn-submit").on('click',function(){
           var user_name=$("input[name='user_name']").val();
           var password=$("input[name='password']").val();
            if(user_name==''){
                alert('用户名不能为空！');
                return false;
            }
            if(password==''){
                alert('密码不能为空!');
                return false;
            }
            $.ajax({
                url:'/Admin/Login/login',
                data:{
                    'name':user_name,
                    'pwd':password
                },
                type:'post',
                dataType:'json',
                success: function (data) {
                    if(data.status==100){
                        alert(data.msg);
                        window.location="/Admin/Index/index";
                    }else{
                        alert(data.msg);
                    }
                }
            })
       })
    });
</script>