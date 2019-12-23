<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />


    <title>中意家园网上商城</title>
    <meta name="Keywords" content="中意家园网上商城" />
    <meta name="Description" content="中意家园网上商城" />


    <link href="/web/css/style.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/web/js/-jquery-1.8.3.min.js"></script>
    <link href="/web/css/nav2.css" type="text/css" rel="stylesheet"><!--藏品分类 -->
    <link href="/web/css/amazeui.min.css" rel="stylesheet" />
    <script src="/web/js/amazeui.min.js"></script>
    <!--手滑效果 -->
    <script type="text/javascript">
        <!--
        var timeout         = 500;
        var closetimer		= 0;
        var ddmenuitem      = 0;

        // open hidden layer
        function mopen(id)
        {
            // cancel close timer
            mcancelclosetime();

            // close old layer
            if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

            // get new layer and show it
            ddmenuitem = document.getElementById(id);
            ddmenuitem.style.visibility = 'visible';

        }
        // close showed layer
        function mclose()
        {
            if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
        }

        // go close timer
        function mclosetime()
        {
            closetimer = window.setTimeout(mclose, timeout);
        }

        // cancel close timer
        function mcancelclosetime()
        {
            if(closetimer)
            {
                window.clearTimeout(closetimer);
                closetimer = null;
            }
        }

        // close layer when click-out
        document.onclick = mclose;
        // -->
    </script>
</head>

<body style="background: #f1f1f1;">

<div class="qing juzhong lobg" style="position: absolute;top: 50%;margin-top: -290px; left:50%; margin-left:-600px; overflow:inherit">

    <div class="log-rf" style="float:none; margin:0 auto; height:auto;">
        <form action="registDo" method="post" enctype="multipart/form-data">
            @csrf
        <div class="logk zcok" style="padding-bottom:40px; margin-bottom:30px;">
            <div class="loto"><img src="/web/images/login-t.png" width="145" height="145" class="login-t"><img src="/web/images/login-bg.png" width="221" height="247" class="login-bg"></div>
            <div class="lo-dl">
                <div class="lf">邮箱：</div>
                <input type="text" placeholder="请输入邮箱" name="email" id="email">
            </div>
            <div class="lo-dl">
                <div class="lf">账号：</div>
                <input type="text" placeholder="请输入邮箱" name="name" id="name">
            </div>

            <div class="lo-dl">
                <div class="lf">密　　码：</div>
                <input type="password" placeholder="请输入密码" name="pwd" id="pwd">
            </div>
            <div class="lo-dl">
                <div class="lf">确认密码：</div>
                <input type="password" placeholder="请确认密码" name="repassword" id="repassword">
            </div>
            <div class="lo-dl">
                <div class="lf" style="width: 84px;">昵称：</div>
                <input type="text" placeholder="请确认昵称" name="nickname" id="nickname">
            </div>
            <div class="lo-dl">
                <div class="lf">头像：</div>
                <input type="file" name="headimg" id="headimg">
            </div>

            <div class="lo-dl" >
                <div class="lf">性别：</div>
                <div style="float: left;"><input type="radio" placeholder="请输入性别" name="gender" id="gender" style="width: 20px; height: 20px" value="0">男</div>
                <div>女 <input type="radio" placeholder="请输入性别" name="gender" id="gender" style="width: 20px; height: 20px" value="1"></div>

            </div>

            <div class="lo-dl">
                <div class="lf">出生年月：</div>
                <input type="date" placeholder="请输入出生年月" name="birthdate" id="birthdate">
            </div>
            <div>
                <input type="submit" value="注册" class="dlan">
            </div>
            <div class="lo-zc">
                已经注册账号？　　<a href="indexlogin" class="lo-zc1">立即登录</a>
            </div>
        </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="/web/js/address.js"></script>
</body>
</html>
<script>
    // $(':button').click(function(){
    //     var email=$('#email').val();
    //     var name=$('#name').val();
    //     var pwd=$('#pwd').val();
    //     var nickname=$('#nickname').val();
    //     var headimg=$('#headimg').val();
    //     var birthdate=$('#birthdate').val();
    //     var gender=$('#gender').val();
    //     // alert(gender);
    //    $.ajax({
    //        url:'register_add',
    //        dataType:'json',
    //        data:{
    //            name:name,
    //            email:email,
    //            pwd:pwd,
    //            nickname:nickname,
    //            headimg:headimg,
    //            birthdate:birthdate,
    //            gender:gender,
    //        },
    //        success:function(res){
    //            // alert($data);
    //            if(res.code == 0){
    //                alert(res.msg);
    //            }else{
    //                alert(res.msg);
    //            }
    //        }
    //    })
    // })
</script>
