<!doctype html>
<html  class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title>后台登录-X-admin2.2</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="./x-admin/css/font.css">
    <link rel="stylesheet" href="./x-admin/css/login.css">
    <link rel="stylesheet" href="./x-admin/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="./x-admin/lib/layui/layui.js" charset="utf-8"></script>
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-bg">

<div class="login layui-anim layui-anim-up">
    <div class="message">商城后台登陆</div>
    <div id="darkbannerwrap"></div>

    <form  method="post" class="layui-form" >
        @csrf
        <input name="username" id="username" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
        <hr class="hr15">
        <input name="password" id="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
        <hr class="hr15">
        <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="button" id="butt">
        <hr class="hr20" >
    </form>
</div>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script>

    $(function  () {
        layui.use('form', function(){
            var form = layui.form;
            // layer.msg('玩命卖萌中', function(){
            //   //关闭后的操作
            //   });
            // // 监听提交
            form.on('submit(login)', function(data){
                var username = $('#username').val();
                var password = $('#password').val();
                $.ajax({
                    url:"doLogin",
                    dataType:"json",
                    data:{
                        username:username,
                        password:password
                    },
                    success:function (e){
                        if(e.code==0){
                            alert(e.msg);
                            // layer.msg(e.msg, function(){
                                location.href='index';
                            // });
                        } else if (e.code==1) {
                            layer.msg(e.msg);
                        } else {
                            layer.msg(e.msg);
                        }
                    }
                })

                // layer.msg(JSON.stringify(data.field),function(){
                //     // location.href='index.html'
                // });
                return false;
            });
        });
    })
</script>
<!-- 底部结束 -->
{{--<script>--}}
{{--    //百度统计可去掉--}}
{{--    var _hmt = _hmt || [];--}}
{{--    (function() {--}}
{{--        var hm = document.createElement("script");--}}
{{--        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";--}}
{{--        var s = document.getElementsByTagName("script")[0];--}}
{{--        s.parentNode.insertBefore(hm, s);--}}
{{--    })();--}}
{{--</script>--}}
</body>
</html>