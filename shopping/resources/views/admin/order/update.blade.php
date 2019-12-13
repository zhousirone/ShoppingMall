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
    <script src="./x-admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./x-admin/js/xadmin.js"></script>
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<form class="layui-form" action="">
    <div class="layui-form-item">
        <label class="layui-form-label">订单编号</label>
        <div class="layui-input-block">
            <input type="text" value="{{$arr[0]['order_number']}}" disabled required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">买家姓名</label>
        <div class="layui-input-block">
            <input type="text" value="{{$arr[0]['name']}}" disabled required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">选择框</label>
        <div class="layui-input-block">
            <select name="order_state" lay-verify="required">
                @foreach($state as $k => $v)
                    @if($arr[0]['order_state'] == $k)
                    <option value="{{$k}}" selected>{{$v}}</option>
                        @else
                        <option value="{{$k}}">{{$v}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <input type="hidden" value="{{$arr[0]['id']}}" name="id">
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>
<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form;
        //监听提交
        form.on('submit(formDemo)', function(data){
            console.log(data.field)
            $.ajax({
                url:'order_update_do',
                data:{
                    data:data.field,
                    _token:'{{csrf_token()}}'
                },
                type:'post',
                success:function (e) {
                    if (e == 1){
                        // // 发异步，把数据提交给php
                        layer.alert("订单状态修改成功！", {
                                icon: 6
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
            // layer.msg(JSON.stringify(data.field));
             return false;


        });
    });
</script>
</body>
</html>
