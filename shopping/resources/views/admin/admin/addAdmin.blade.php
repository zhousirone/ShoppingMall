<!DOCTYPE html>
<html class="x-admin-sm">

<head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.2</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="stylesheet" href="./x-admin/css/font.css">
    <link rel="stylesheet" href="./x-admin/css/xadmin.css">
    <script type="text/javascript" src="./x-admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./x-admin/js/xadmin.js"></script>
{{--    <script type="text/javascript" src="./js/jquery.3.3.1.min.js"></script>--}}
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="x-nav">
          <span class="layui-breadcrumb">
            <a href="">首页</a>
            <a href="">演示</a>
            <a>
              <cite>导航元素</cite></a>
          </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
        <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
</div>
<div class="layui-fluid">
    <div class="layui-row">
        <div class="layui-card">
            <div class="layui-card-body ">
        <form class="layui-form">
            <div class="layui-form-item">
                <label for="username" class="layui-form-label">
                    <span class="x-red">*</span>用户名</label>
                <div class="layui-input-inline">
                    <input type="text" id="username" name="username" required="" lay-verify="username" autocomplete="off" class="layui-input"></div>
                <div class="layui-form-mid layui-word-aux">
                    <span class="x-red">*</span>将会成为您唯一的登入名</div>
            </div>
            <div class="layui-form-item">
                <label for="L_pass" class="layui-form-label">
                    <span class="x-red">*</span>密码</label>
                <div class="layui-input-inline">
                    <input type="password" id="password" name="password" required="" lay-verify="pass" autocomplete="off" class="layui-input"></div>
                <div class="layui-form-mid layui-word-aux">6到16个字符</div>
            </div>
            <div class="layui-form-item">
                <label for="L_password" class="layui-form-label">
                    <span class="x-red">*</span>确认密码</label>
                <div class="layui-input-inline">
                    <input type="password" id="L_password" name="L_password" required="" lay-verify="repass" autocomplete="off" class="layui-input"></div>
            </div>
            <div class="layui-form-item">
                <label for="L_nickname" class="layui-form-label">
                    <span class="x-red">*</span>昵称</label>
                <div class="layui-input-inline">
                    <input type="text" id="nickname" name="nickname" required="" lay-verify="nikename" autocomplete="off" class="layui-input"></div>
            </div>
            <div class="layui-form-item">
                <label for="L_repass" class="layui-form-label"></label>
                <button class="layui-btn" lay-filter="add" lay-submit="">增加</button>
            </div>
        </form>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use(['form', 'layer','jquery'],
        function() {
            $ = layui.jquery;
            var form = layui.form,
                layer = layui.layer;

            //自定义验证规则
            form.verify({
                username: function(value) {
                    if (value.length < 5) {
                        return '用户名至少得5个字符啊';
                    }
                },
                nikename: function(value) {
                    if (value.length < 5) {
                        return '昵称至少得5个字符啊';
                    }
                },
                password: [/(.+){6,12}$/, '密码必须6到12位'],
                L_password: function(value) {
                    if ($('#password').val() != $('#L_password').val()) {
                        return '两次密码不一致';
                    }
                }
            });

            //监听提交
            form.on('submit(add)',
                function(data) {
                    var username = $('#username').val();
                    var password = $('#password').val();
                    var nickname = $('#nickname').val();

                    $.ajax({
                        url:'doAddAdmin',
                        type:'post',
                        dataType:"json",
                        data:{
                            username:username,
                            password:password,
                            nickname:nickname,
                            _token:'{{csrf_token()}}'
                        },
                        success:function (e) {
                            console.log(e);
                            if (e.code==0){
                                layer.alert(e.msg, {
                                        icon: 6
                                    },
                                    function() {
                                        //关闭当前frame
                                        xadmin.close();

                                        // 可以对父窗口进行刷新
                                        xadmin.father_reload();
                                    });

                            }else {
                                layer.alert(e.msg, {
                                        icon: 5
                                    },
                                    function() {
                                        //关闭当前frame
                                        xadmin.close();

                                        // 可以对父窗口进行刷新
                                        xadmin.father_reload();
                                    });

                            }
                        }
                    })
                    //发异步，把数据提交给php

                    return false;
                });

        });</script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
</body>

</html>