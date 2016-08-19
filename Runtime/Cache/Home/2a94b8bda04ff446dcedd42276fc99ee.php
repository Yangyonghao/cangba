<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>cang吧</title>
    <style>
        body{
            margin: 0;padding: 0;
        }
        .head_title{
            width: 80%;
            height: 100px;
            margin: 0 auto;
            /*border: 1px solid #000000;*/
        }
        .head_title div{
            float: left;
        }
        .head_panel{
            border-bottom:2px solid red;
            background-color: #404040;
            width: 100%;
            height: 100px;;
            /*filter:alpha(opacity=50);*/
            /*-moz-opacity:0.5;*/
            /*-khtml-opacity: 0.5;*/
            /*opacity: 0.5;*/

        }
        .header_left_width{
            width: 60%;
        }
        .header_left{
            /*border:1px solid green;*/
            margin: 19px auto;
        }
        .header_left ul{
            margin: 0;
            height: 60px;
        }
        .header_left ul li{
            margin: 0 10px;
            width: 100px;
            display: block;
            height: 60px;
            line-height: 60px;
            float: left;
            text-align: center;
            border-radius: 25px;
            border: 1px solid darkgreen;
        }
        .header_left ul li a{
            text-decoration: none;
            color: white;

        }
        .header_left ul li:hover{
            background-color: lightslategray;
            font-size:18px;
        }

        .com_head_nav{
            height:60px;
        }
        /*body*/
        .control_panel{
            width: 90%;
            height: 450px;
            margin: 50px auto;
            background-color:#404040;
            border: 1px solid #9C9C9C;
        }
        .both{
            clear: both;
        }

        .footer{
            width: 100%;
            height: 100px;
            border: 1px solid green;
        }

        .contain_left_child{

        }
        .contain_left_child ul{
            padding: 0;
        }
        .contain_left_child ul li{
            height: 38px;
            line-height: 38px;
            background-color:#f6f4f0;
            border-bottom:2px solid #efefef;
            /*border-bottom:1px solid #efefef;*/
            list-style-type:none;
        }
        .contain_left_child ul li a{
            display: block;
            text-decoration: none;
            font-size: 16px;
            text-align: center;
            color: #000000;
        }
        .contain_left_child ul li a:hover{
            background-color:white;
            font-size: 22px;
        }
    </style>
</head>
<body>
<div class="head_panel">

    <div class="head_title">
        <div style="width: 100px;height: 100px;">
            <img src="/public/image/cangba.png" width="100%" height="100%" />
        </div>
        <div class="header_left header_left_width com_head_nav">
            <ul>
                <li><a href="javascript:void(0)">首页</a></li>
                <li><a href="javascript:void(0)">公司新闻</a></li>
                <li><a href="javascript:void(0)">企业文化</a></li>
                <li><a href="javascript:void(0)">钱币分类</a></li>
            </ul>
        </div>

        <div class="header_left" style="width:30%">
            <ul>
                <li><a href="javascript:void(0)">登录</a></li>
                <li><a href="javascript:void(0)">注册</a></li>
            </ul>
        </div>
        <div class="both"></div>
    </div>
</div>
<div class="control_panel">
    <div style="width: 90%;height:100%;margin: 0 auto;">
        <div class="contain_left" style="width: 18%;height:90%;margin:2% 0;background-color:whitesmoke;border: 1px solid #808080;float: left">
            <div class="contain_left_child">
                <ul>
                    <li><a href="javascript:void(0)">第壹套人民币</a></li>
                    <li><a href="javascript:void(0)">第贰套人民币</a></li>
                    <li><a href="javascript:void(0)">第叁套人民币</a></li>
                    <li><a href="javascript:void(0)">第肆套人民币</a></li>
                    <li><a href="javascript:void(0)">第伍套人民币</a></li>
                    <li><a href="javascript:void(0)">第陆套人民币</a></li>
                </ul>
            </div>
        </div>
        <div class="contain_right" style="width: 80%;height:90%;margin:2% 0;background-color:whitesmoke;border: 1px solid #808080;float: right">

        </div>
    </div>
</div>
<div class="footer">

</div>

</body>
</html>