
<!DOCTYPE html>
<html class="x-admin-sm">
@extends('admin.common.header')
<script src="/admin/lib/layui/layui.js" charset="utf-8"></script>
<script type="text/javascript" src="/admin/js/xadmin.js"></script>
<body>
<div class="x-nav">
          <span class="layui-breadcrumb">
            <a href="attr_value">首页</a>
            <a href="">演示</a>
            <a>
              <cite>属性值管理</cite></a>
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
                    <a title="添加" class="layui-btn" data-toggle="modal" data-target="#myModal" href="brand_add">添加</a>
                    <a title="排序" class="layui-btn" data-toggle="modal" data-target="#myModal" href="order_list">排序</a>
                    {{--                    <button class="layui-btn" onclick="xadmin.open('添加属性','http://www.larave.com/attr_value',600,400)"><i class="layui-icon"></i>属性管理</button>--}}
                    {{--                    <a title="修改" class="layui-btn" data-toggle="modal" data-target="#myModal" href="attr_value.blade.php"></a>--}}

                </div>
                <div class="layui-card-body layui-table-body layui-table-main">
                    <table class="layui-table layui-form">
                        <thead>
                        <tr>

                            <th>ID</th>
                            <th>属性展示名称</th>
                            <th>属性所属分类</th>
                            <th>前台是否展示该属性</th>
                            <th>操作</th>

                        </tr>

                        </thead>
                        <tbody>
                        @foreach($data as $k=>$v)
                            <tr>

                                <td>{{$v['id']}}</td>
                                <td>{{$v['name']}}</td>
                                <td>{{$v['status']}}</td>
                                <td class="td-status">
                                    <span class="layui-btn layui-btn-normal layui-btn-mini">{{$v['status']}}</span></td>
                                <td class="td-manage">
                                    {{--                                    <a onclick="member_stop(this,'')" href="javascript:;"  title="启用">--}}
                                    {{--                                        <i class="layui-icon">&#xe601;</i>--}}
                                    {{--                                    </a>--}}
                                    <a title="品牌编辑" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" href="brand_upd?id={{$v['id']}}">
                                        <i class="layui-icon">&#xe631;</i>
                                    </a>
                                    <a title="排序" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" href="order_list?id={{$v['id']}}">
                                        <i class="layui-icon">&#xe638;</i>
                                    </a>
                                    {{--                                <a onclick="xadmin.open('修改密码','member-password.html',600,400)" title="修改密码" href="javascript:;">--}}
                                    {{--                                    <i class="layui-icon">&#xe631;</i>--}}
                                    {{--                                </a>--}}
                                    <a title="品牌删除" onclick="member_del(this,'{{$v['id']}}')" href="javascript:;">
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
<script type="text/javascript" src="../../../jquery-3.3.1.min.js"></script>
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