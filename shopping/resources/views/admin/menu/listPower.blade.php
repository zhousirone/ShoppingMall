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
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                {{--                <div class="layui-card-body ">--}}
                {{--                    <form class="layui-form layui-col-space5">--}}

                {{--                        <div class="layui-inline layui-show-xs-block">--}}
                {{--                            <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">--}}
                {{--                        </div>--}}
                {{--                        <div class="layui-inline layui-show-xs-block">--}}
                {{--                            <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>--}}
                {{--                        </div>--}}
                {{--                    </form>--}}
                {{--                </div>--}}
                {{--                <div class="layui-card-header">--}}
                {{--                    --}}{{--                    <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>--}}
                {{--                    <button class="layui-btn" onclick="xadmin.open('添加管理员','addAdmin',600,400)"><i class="layui-icon"></i>添加</button>--}}
                {{--                </div>--}}
                <div class="layui-card-body layui-table-body layui-table-main">
                    <table class="layui-table layui-form">
                        <thead>
                        <tr>
                            <th>权限ID</th>
                            <th>权限名称</th>
                            <th>权限下菜单数量</th>
                            <th>菜单是否展示</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $k => $v)
                            <tr>
                                <td>{{$v['id']}}</td>
                                <td>{{$v['powername']}}</td>
                                <td>{{$v['num']}}</td>
                                <td></td>
                                <td class="td-manage">

                                    <a onclick="xadmin.open('修改','updPower?id={{$v['id']}}',600,400)" title="修改" href="javascript:;">
                                        <i class="layui-icon">&#xe631;</i>
                                    </a>
                                    <a title="删除" onclick="member_del(this,{{$v['id']}})" href="javascript:;">
                                        <i class="layui-icon">&#xe640;</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="layui-card-body ">
                    <div class="page">
                        <div>
                            <a class="prev" href="">&lt;&lt;</a>
                            <a class="num" href="">1</a>
                            <span class="current">2</span>
                            <a class="num" href="">3</a>
                            <a class="next" href="">&gt;&gt;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    layui.use(['laydate','form'], function(){
        var laydate = layui.laydate;
        var  form = layui.form;


        // 监听全选
        form.on('checkbox(checkall)', function(data){

            if(data.elem.checked){
                $('tbody input').prop('checked',true);
            }else{
                $('tbody input').prop('checked',false);
            }
            form.render('checkbox');
        });

        //执行一个laydate实例
        laydate.render({
            elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
            elem: '#end' //指定元素
        });


    });

    /*用户-删除*/
    function member_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            //发异步删除数据
            $.ajax({
                url:'delPower',
                type:'post',
                dataType:"json",
                data:{
                    id:id,
                    _token:'{{csrf_token()}}'
                },
                success:function (e) {
                    console.log(e);
                    if (e.code == 0) {

                        $(obj).parents("tr").remove();
                        layer.msg(e.msg,{icon:1,time:1000});
                    }else if(e.code == 1){
                        $(obj).parents("tr").remove();
                        layer.msg(e.msg,{icon:6,time:1000});
                    }else{

                        layer.msg(e.msg,{icon:7,time:1000});
                    }
                }
            })

        });
    }




</script>
</html>