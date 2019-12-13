<!DOCTYPE html>
<html class="x-admin-sm">

<head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.2</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="stylesheet" href="{{asset('ad/admin/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('ad/admin/css/xadmin.css')}}">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('ad/admin/lib/layui/layui.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{asset('ad/admin/js/xadmin.js')}}./"></script>
    {{--    <!--[if lt IE 9]>--}}
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>
<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-body ">
                    <form class="layui-form layui-col-md12  layui-form-pane">
                        @csrf
                        <div class="layui-form-item">
                            <label class="layui-form-label">内容</label>
                            <div class="layui-input-block">
                                <input type="text" name="feedback_reply" lay-verify="required|title"  lay-reqText="标题不能为空" required placeholder="请输入标题" autocomplete="off" class="layui-input" >
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <input type="hidden" value="{{$id}}" name="feedback_id">
                                <input type="hidden" value="1" name="user_id">
                                <button class="layui-btn" lay-filter="add" lay-submit="">回复</button>
                            </div>
                        </div>
                    </form>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('ad/admin/js/xcity.js')}}"></script>
<script>

    layui.use(['form', 'layer'],
        function() {
            $ = layui.jquery;
            var form = layui.form,
                layer = layui.layer;
            //自定义验证规则
            form.verify({
                nikename: function (value) {
                    if (value.length < 5) {
                        return '内容至少得5个字符啊';
                    }
                },
            });
            form.on('submit(add)',
                function(data) {
                    console.log(data.field);
                    $.ajax({
                        url:'add',
                        data:{
                            data:data.field,
                            _token:'{{csrf_token()}}'
                        },
                        type:'post',
                        success:function (e) {
                            console.log(11)
                            console.log(e)
                            console.log(222)
                            if (e == 1){
                                // 发异步，把数据提交给php
                                layer.alert("增加成功", {
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

                    return false;
                });
        })
</script>
</body>

</html>

