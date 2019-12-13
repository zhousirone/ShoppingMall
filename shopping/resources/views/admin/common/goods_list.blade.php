
<!DOCTYPE html>
<html class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title>后台登录-X-admin2.2</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/ad/admin/css/font.css">
    <link rel="stylesheet" href="/ad/admin/css/xadmin.css">
    <!-- <link rel="stylesheet" href="/admin/css/theme5.css"> -->

    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        // 是否开启刷新记忆tab功能
        // var is_remember = false;
    </script>
</head>
<script src="/ad/admin/lib/layui/layui.js" charset="utf-8"></script>
<script type="text/javascript" src="/ad/admin/js/xadmin.js"></script>
<body>
<div class="x-nav">
          <span class="layui-breadcrumb">
            <a href="">首页</a>
            <a href="">演示</a>
            <a>
              <cite>商品属性管理</cite></a>
          </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
        <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
</div>
<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">


                <div class="layui-card-header">
{{--                    <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>--}}
                    <button class="layui-btn" onclick="xadmin.open('添加属性','http://www.larave.com/attr_add',600,400)"><i class="layui-icon"></i>添加</button>

                    <a class="layui-btn" title="属性值管理" href="attr_value">属性值管理</a>

                </div>
                <div class="layui-card-body layui-table-body layui-table-main">
                    <table class="layui-table layui-form">
                        <thead>
                        <tr>
                            <th>
                                <input type="checkbox" lay-filter="checkall" name="" lay-skin="primary">
                            </th>
                            <th>ID</th>
                            <th>属性展示名称</th>
<<<<<<< HEAD

{{--                            <th>前台是否展示该属性</th>--}}
=======
                            <th>属性所属分类</th>
                            <th>前台是否展示该属性</th>
>>>>>>> 5f39c0efe39fcf3746c00d80609eeb7cea08db54
                            <th></th>
                            <th>操作</th>

                        </tr>

                        </thead>
                        <tbody>
                        @foreach($data as $k=>$v)
<<<<<<< HEAD
                            <tr>
                                <td>
                                    <input type="checkbox" lay-skin="primary">
                                </td>
                                <td>{{$v['id']}}</td>
                                <td>{{$v['attr_name']}}</td>
{{--                                <td>{{$v['status']}}</td>--}}
                                <td class="td-status">
                                    <span class="layui-btn layui-btn-normal layui-btn-mini"></span></td>
                                <td class="td-manage">
                                    <a onclick="member_stop(this,'{{$v['id']}}')" href="javascript:;"  title="启用">
                                        <i class="layui-icon">&#xe601;</i>
                                    </a>
                                    {{--                                <a title="编辑属性"  onclick="xadmin.open('编辑','member-edit.html',600,400)" href="javascript:;">--}}
                                    {{--                                    <i class="layui-icon">&#xe642;</i>--}}
                                    {{--                                </a>--}}
                                    <a title="编辑属性" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" href="attr_upd?id={{$v['id']}}">
                                        <i class="layui-icon">&#xe631;</i>
                                    </a>
                                    <a title="分类" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" href="update_id?id={{$v['id']}}"  title="22">
                                        <i class="layui-icon">&#xe699;</i>
                                    </a>
                                    <a title="删除" onclick="member_del(this,'{{$v['id']}}')" href="javascript:;">
                                        <i class="layui-icon">&#xe640;</i>
                                    </a>
                                </td>
                            </tr>
=======
                        <tr>
                            <td>
                                <input type="checkbox" lay-skin="primary">
                            </td>
                            <td>{{$v['id']}}</td>
                            <td>{{$v['name']}}</td>
                            <td>{{$v['class']}}</td>
                            <td>{{$v['status']}}</td>


                            <td class="td-status">
                                <span class="layui-btn layui-btn-normal layui-btn-mini">{{$v['status']}}</span></td>
                            <td class="td-manage">
                                <a onclick="member_stop(this,'{{$v['id']}}')" href="javascript:;"  title="启用">
                                    <i class="layui-icon">&#xe601;</i>
                                </a>
{{--                                <a title="编辑属性"  onclick="xadmin.open('编辑','member-edit.html',600,400)" href="javascript:;">--}}
{{--                                    <i class="layui-icon">&#xe642;</i>--}}
{{--                                </a>--}}
                                <a title="编辑属性" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" href="attr_upd?id={{$v['id']}}">
                                    <i class="layui-icon">&#xe631;</i>
                                </a>
                               <a title="分类" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" href="update_id?id={{$v['id']}}"  title="22">
                                    <i class="layui-icon">&#xe699;</i>
                                </a>
                                <a title="删除" onclick="member_del(this,'{{$v['id']}}')" href="javascript:;">
                                    <i class="layui-icon">&#xe640;</i>
                                </a>
                            </td>
                        </tr>
>>>>>>> 5f39c0efe39fcf3746c00d80609eeb7cea08db54
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
                            <a class="num" href="">489</a>
                            <a class="next" href="">&gt;&gt;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
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
    function member_id(obj,id){
        alert(id);

            $.ajax({
                url:'update_id',
                dataType:'json',
                type:'post',
                data:{
                    id:id,
                    token:'{{csrf_token()}}',
                },
                success:function ($data) {
                    console.log($data);

                }
        });
    }




    /*用户-停用*/
    function member_stop(obj,id){
        alert(id);
        layer.confirm('确认要停用吗？',function(index){
            $.ajax({
                url:'status_upd',
                dataType:'json',
                data:{
                    id:id
                },
                success:function ($data) {
                    console.log($data);
                    if($(obj).attr('title')=='启用'){

                        //发异步把用户状态进行更改
                        $(obj).attr('title','停用')
                        $(obj).find('i').html('&#xe62f;');

                        $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已停用');
                        layer.msg('已停用!',{icon: 5,time:1000});

                    }else{
                        $(obj).attr('title','启用')
                        $(obj).find('i').html('&#xe601;');

                        $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已启用');
                        layer.msg('已启用!',{icon: 5,time:1000});
                    }
                }
            })


        });
    }

    /*用户-删除*/
    function member_del(obj,id){
        alert(id);
        $.ajax({
            url:'del',
            dataType:'json',
            data:{
                id:id
            },
            success:function (e) {
                if(e == 0){
                    //发异步删除数据
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                }
            }

        })
    }



    function delAll (argument) {
        var ids = [];

        // 获取选中的id
        $('tbody input').each(function(index, el) {
            if($(this).prop('checked')){
                ids.push($(this).val())
            }
        });

        layer.confirm('确认要删除吗？'+ids.toString(),function(index){
            //捉到所有被选中的，发异步进行删除
            layer.msg('删除成功', {icon: 1});
            $(".layui-form-checked").not('.header').parents('tr').remove();
        });
    }
</script>
</html>