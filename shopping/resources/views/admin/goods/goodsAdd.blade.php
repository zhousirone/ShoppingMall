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
</head>

<body>

<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <div class="layui-card-body ">
            <form class="layui-form" action="doGoodsAdd" method="post" enctype="multipart/form-data">
                @csrf
                <div class="layui-form-item">
                    <label for="L_password" class="layui-form-label">
                        <span class="x-red">*</span>商品名称</label>
                    <div class="layui-input-inline">
                        <input type="text" id="name" name="name" required="" lay-verify="name" autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_password" class="layui-form-label">
                        <span class="x-red">*</span>所属分类</label>
                    <div class="layui-input-inline layui-show-xs-block">

                        <select name="class_id" id="class_id">

                            @foreach($class as $k => $v)
                                <option value="{{$v['id']}}">{{$v['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_password" class="layui-form-label">
                        <span class="x-red">*</span>所属品牌</label>
                    <div class="layui-input-inline layui-show-xs-block">

                        <select name="brand_id" id="brand_id">

                            @foreach($brand as $k => $v)
                                <option value="{{$v['id']}}">{{$v['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_password" class="layui-form-label">
                        <span class="x-red">*</span>所属仓库</label>
                    <div class="layui-input-inline layui-show-xs-block">

                        <select name="warehouse_id" id="warehouse_id">

                            @foreach($warehouse as $k => $v)
                                <option value="{{$v['id']}}">{{$v['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_password" class="layui-form-label">
                        <span class="x-red">*</span>商品描述</label>
                    <div class="layui-input-inline">
                        <textarea name="goods_content" id="goods_content" cols="29" rows="10" style="border: #F8F8F8;"></textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_password" class="layui-form-label">
                        <span class="x-red">*</span>商品售价</label>
                    <div class="layui-input-inline">
                        <input type="text" id="price" name="price" required="" lay-verify="price" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_password" class="layui-form-label">
                        <span class="x-red">*</span>商品划线价</label>
                    <div class="layui-input-inline">
                        <input type="text" id="price_hua" name="price_hua" required="" lay-verify="brand_id" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_password" class="layui-form-label">
                        <span class="x-red">*</span>商品图片</label>
                    <div class="layui-input-inline">
                        <input type="file" id="image" name="image"  class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_password" class="layui-form-label">
                        <span class="x-red">*</span>上下架状态</label>
                    <div class="layui-input-inline">
                        上架<input type="radio" id="status" name="status" required="" value="上架" lay-verify="status" autocomplete="off" class="layui-input">
                        下架<input type="radio" id="status" name="status" required="" value="下架" lay-verify="status" autocomplete="off" class="layui-input">                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_password" class="layui-form-label">
                        <span class="x-red">*</span>是否是礼物</label>
                    <div class="layui-input-inline">
                        是 <input type="radio" id="is_gift" name="is_gift" required="" value="是" lay-verify="is_gift" autocomplete="off" class="layui-input">
                        否 <input type="radio" id="is_gift" name="is_gift" required="" value="否" lay-verify="is_gift" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_password" class="layui-form-label">
                        <span class="x-red">*</span>库存</label>
                    <div class="layui-input-inline">
                        <input type="text" id="kucun" name="kucun" required="" lay-verify="kucun" autocomplete="off" class="layui-input">
                    </div>
                </div>
              


                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label"></label>
                    <button class="layui-btn" lay-filter="update" lay-submit="">添加商品</button>
                </div>
            </form>

        </div>


    </div>
</div>
</body>
<script>
    layui.use(['laydate', 'form'],
        function() {
            var laydate = layui.laydate;
            $ = layui.jquery;
            var form = layui.form,
                layer = layui.layer;

            form.on('submit(aa)',
                function(data) {
                    var name = $('#name').val();
                    var image = $('#image').val();
                    var formData = new FormData();
                    formData.append("img",image);
                    formData.append('name',name);
                    // console.log(id);

                    $.ajax({
                        url:'doGoodsAdd',
                        type:'post',
                        dataType:"json",
                        async:false,
                        processData:false,
                        contentType:false,
                        data:{
                            data:formData,
                            _token:'{{csrf_token()}}'
                        },
                        success:function (e) {
                            console.log(e);
                            if (e.code==0){
                                layer.alert(e.msg, {
                                        icon: 6
                                    },
                                    function() {
                                        //关闭当前frame
                                        xadmin.close();

                                        // 可以对父窗口进行刷新
                                        xadmin.father_reload();
                                    });

                            }else if(e.code==1) {
                                layer.alert(e.msg, {
                                        icon: 5
                                    },
                                    function() {
                                        //关闭当前frame
                                        xadmin.close();

                                        // 可以对父窗口进行刷新
                                        xadmin.father_reload();
                                    });
                            }else{
                                layer.alert(e.msg, {
                                        icon: 7
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
                    //发异步，把数据提交给php

                    return false;
                });
        });

</script>

</html>