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
                <div class="layui-card-body layui-table-body layui-table-main">
                    <table class="layui-table layui-form">
                        <thead>
                        <tr>
                            <th>订单编号</th>
                            <th>商品</th>
                            <th>买家姓名</th>
                            <th>买家电话</th>
                            <th>地址</th>
                            <th>订单状态</th>
                            <th>支付状态</th>
                            <th>总金额</th>
                            <th>订单创建时间</th>
                            <th>订单修改时间</th>
                           </tr>
                        </thead>
                        <tbody>
                        @foreach($arr as $k => $v)
                            <tr>
                                <td>{{$v['order_number']}}</td>
                                <td>{{$v['goods_id']}}</td>
                                <td>{{$v['name']}}</td>
                                <td>{{$v['phone']}}</td>
                                <td>{{$v['location']}}</td>
                                <td>
                                    @if($v['order_state'] == 1)
                                        未出库
                                    @elseif($v['order_state'] == 2)
                                        已出库
                                    @elseif($v['order_state'] == 3)
                                        在途中
                                    @elseif($v['order_state'] == 4)
                                        代签收
                                    @elseif($v['order_state'] == 5)
                                        已签收
                                     @endif
                                </td>
                                <td>
                                    @if($v['payment_status'] == 1)
                                        未支付
                                    @else
                                        已支付
                                    @endif

                                </td>
                                <td>{{$v['money']}}</td>
                                <td>{{$v['created_at']}}</td>
                                <td>{{$v['updated_at']}}</td>

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
            $.ajax({
                url:'warehouseDel',
                data:{
                    id:id
                },
                type:'GET',
                success:function (e) {
                    if (e == 1) {
                        //发异步删除数据
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!',{icon:1,time:1000});
                    }
                }
            })


        });
    }



    // function delAll (argument) {
    //     var ids = [];
    //
    //     // 获取选中的id
    //     $('tbody input').each(function(index, el) {
    //         if($(this).prop('checked')){
    //             ids.push($(this).val())
    //         }
    //     });
    //
    //     layer.confirm('确认要删除吗？'+ids.toString(),function(index){
    //         //捉到所有被选中的，发异步进行删除
    //         layer.msg('删除成功', {icon: 1});
    //         $(".layui-form-checked").not('.header').parents('tr').remove();
    //     });
    // }
</script>
</html>
