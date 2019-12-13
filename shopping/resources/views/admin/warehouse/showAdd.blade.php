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
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="x-nav">
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
        <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i>
    </a>
</div>
<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-body ">
                    <form class="layui-form layui-col-md12  layui-form-pane" action="warehouseAdd" method="post">
                        @csrf
                        <div class="layui-form-item">
                            <label class="layui-form-label">仓库名称</label>
                            <div class="layui-input-block">
                                <input type="text" name="name" lay-verify="required|title" lay-reqText="标题不能为空" required placeholder="请输入标题" autocomplete="off" class="layui-input" >
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">仓库编码</label>
                            <div class="layui-input-block">
                                <input type="text" name="code" lay-verify="required|title" lay-reqText="标题不能为空" required placeholder="请输入标题" autocomplete="off" class="layui-input" >
                            </div>
                        </div>
                        <div class="layui-form-item" pane>
                            <label class="layui-form-label">是否启用</label>
                            <div class="layui-input-block">
                                <input type="radio" name="state" value="1" title="启用">
                                <input type="radio" name="state" value="2" title="不启用" checked>
                            </div>
                        </div>
                        <div class="layui-form-item x-city" id="start">
                            <label class="layui-form-label">仓库所在地区</label>
                            <div class="layui-input-inline">
                                <select name="provinces" lay-filter="province">
                                    <option value="">请选择省</option>
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
                                <button class="layui-btn" lay-submit lay-filter="*">立即提交</button>
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

        $('#start').xcity();

        $('#end').xcity('广东','广州市','东山区');

    });
</script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
</body>
</html>