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

<body style="height:100%; overflow:hidden;background: #f1f1f1;">

<div class="qing juzhong lobg" style="position: absolute;top: 50%;margin-top: -290px; left:50%; margin-left:-600px;">
    <div class="log-lf"></div>
    <div class="log-rf">
        <div class="logk">
            <form id="loginform"  method="post">
                @csrf
                <div class="loto"><img src="/web/images/login-t.png" width="145" height="145" class="login-t"><img src="/web/images/login-bg.png" width="221" height="247" class="login-bg"></div>
                <div class="lo-dl">
                    <div class="lf">账号：</div>
                    <input type="text" placeholder="请输入注册时的手机号" name="name" id="name">
                </div>
                <div class="lo-dl">
                    <div class="lf">密码：</div>
                    <input type="password" placeholder="请输入密码" name="pwd" id="pwd">
                </div>
                <div>
                    <input type="submit" value="立即登录" class="dlan">
                </div>
                <div class="lo-zc">
                    还没有帐号？　　<a href="register" class="lo-zc1">免费注册</a>　　|　　<a href="#" class="lo-zc2">忘记密码？</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>


<script>
    $('.dlan').click(function(){
        var name = $('#name').val();
        var pwd = $('#pwd').val();
        // console.log(name);
        // alert(pwd);
        $.ajax({
            url:'loginDo',
            type:'post',
            dataType:'json',
            data:{
                name:name,
                pwd:pwd,
                _token:'{{csrf_token()}}'
            },
            success:function (data) {
                // alert(data.msg);
                if(data.code == 0){
                    alert(data.msg);
                    location.href='marketdisplay';
                }else if(data.code == 1){
                    alert(data.msg);
                }else{
                    alert(data.msg);
                }
            }
        })

    })
</script>
