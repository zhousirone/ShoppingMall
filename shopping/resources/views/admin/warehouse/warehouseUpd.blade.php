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
                            <label class="layui-form-label">仓库名称</label>
                            <div class="layui-input-block">
                                <input type="text" name="name" lay-verify="required|title" value="{{$data[0]['name']}}" lay-reqText="标题不能为空" required placeholder="请输入标题" autocomplete="off" class="layui-input" >
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">仓库编码</label>
                            <div class="layui-input-block">
                                <input type="text" name="code" lay-verify="required|title" value="{{$data[0]['code']}}" lay-reqText="标题不能为空" required placeholder="请输入标题" autocomplete="off" class="layui-input" >
                            </div>
                        </div>
                        <div class="layui-form-item" pane>
                            <label class="layui-form-label">是否启用</label>
                            <div class="layui-input-block">
                                @if($data[0]['state'] == 1)
                                <input type="radio" name="state" value="1" title="启用" checked>
                                <input type="radio" name="state" value="2" title="不启用">
                                @else
                                <input type="radio" name="state" value="1" title="启用">
                                <input type="radio" name="state" value="2" title="不启用" checked>
                                @endif
                            </div>
                        </div>
                        <div class="layui-form-item x-city" id="start">
                            <label class="layui-form-label">仓库所在地区</label>
                            <div class="layui-input-inline">
                                <select name="provinces" lay-filter="province">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="layui-input-inline">
                                <select name="citys" lay-filter="city">
                                    <option value="">请选择市</option>
                                </select>
                            </div>
                            <div class="layui-input-inline">
                                <select name="areas" lay-filter="area">
                                    <option value="">请选择县/区</option>
                                </select>
                            </div>
                        </div>
                        <div class="layui-form-item x-city" id="end">
                            <label class="layui-form-label">城市联动</label>
                            <div class="layui-input-inline">
                                <select name="province" lay-filter="province">
                                    <option value="">请选择省</option>
                                </select>
                            </div>
                            <div class="layui-input-inline">
                                <select name="city" lay-filter="city">
                                    <option value="">请选择市</option>
                                </select>
                            </div>
                            <div class="layui-input-inline">
                                <select name="area" lay-filter="area">
                                    <option value="">请选择县/区</option>
                                </select>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <input type="hidden" value="{{$data[0]['id']}}" name="id">
                                <button class="layui-btn" lay-filter="add" lay-submit="">修改</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
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
    layui.use(['form','code'], function(){
        form = layui.form;
        layui.code();
        $('#start').xcity("{{$data[0]['location']['provinces']}}","{{$data[0]['location']['citys']}}","{{$data[0]['location']['areas']}}");
        $('#end').xcity("{{$data[0]['service']['province']}}","{{$data[0]['service']['city']}}","{{$data[0]['service']['area']}}");
    });
</script>
{{--<script>var _hmt = _hmt || []; (function() {--}}
{{--        var hm = document.createElement("script");--}}
{{--        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";--}}
{{--        var s = document.getElementsByTagName("script")[0];--}}
{{--        s.parentNode.insertBefore(hm, s);--}}
{{--    })();--}}
{{--</script>--}}

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
                        return '昵称至少得5个字符啊';
                    }
                },
            });
            form.on('submit(add)',
                function(data) {
                    console.log(data.field);
                    $.ajax({
                        url:'updata',
                        data:{
                            data:data.field,
                            _token:'{{csrf_token()}}'
                        },
                        type:'POST',
                        success:function (e) {
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

