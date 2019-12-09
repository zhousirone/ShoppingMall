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
            <form class="layui-form">

                <div class="layui-form-item">
                    <label for="role" class="layui-form-label">
                        <span class="x-red">*</span>选择父级菜单
                    </label>
                    <div class="layui-input-inline layui-show-xs-block">
                        <select name="power_id" id="power_id">
                            @foreach($power as $k => $v)
                                <option value = "{{$v['id']}}">{{$v['powername']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>



                <div class="layui-form-item">
                    <label for="menuname" class="layui-form-label">
                        <span class="x-red">*</span>菜单名称</label>
                    <div class="layui-input-inline">
                        <input type="text" id="menuname" name="menuname" value="" required="" lay-verify="menuname" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="url" class="layui-form-label">
                        <span class="x-red">*</span>菜单url</label>
                    <div class="layui-input-inline">
                        <input type="text" id="url" name="url" value="" required="" lay-verify="url" autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_nickname" class="layui-form-label">
                        <span class="x-red">*</span>是否显示
                    </label>
                    <div class="layui-input-inline" style="height: 50px;line-height: 50px;">
                        显示<input type="radio" id="username" name="username" value="0" required="" lay-verify="username" autocomplete="off" class="layui-input">
                        不显示<input type="radio" id="username" name="username" value="1" required="" lay-verify="username" autocomplete="off" class="layui-input">
                    </div>
                </div>

                
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label"></label>
                    <button class="layui-btn" lay-filter="update" lay-submit="">添加菜单</button>
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

            form.on('submit(update)',
                function(data) {
                    var menuname = $('#menuname').val();
                    var power_id = $('#power_id').val();
                    var url = $('#url').val();
                    console.log(power_id);

                    $.ajax({
                        url:'doAddMenu',
                        type:'post',
                        dataType:"json",
                        data:{
                            menuname:menuname,
                            power_id:power_id,
                            url:url,
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