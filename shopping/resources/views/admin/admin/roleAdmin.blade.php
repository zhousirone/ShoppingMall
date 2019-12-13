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
                            <label for="L_pass" class="layui-form-label">
                                <span class="x-red">*</span>ID
                            </label>
                            <div class="layui-input-inline">
                                <label for="L_pass" class="layui-form-label">
                                    <input type="hidden" name="id" id="id" value="{{$data['id']}}">
                                    {{$data['id']}}
                                </label>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label for="username" class="layui-form-label">
                                <span class="x-red">*</span>用户名</label>
                            <div class="layui-input-inline">
                                <label for="username" class="layui-form-label">
                                    {{$data['username']}}
                                </label>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label for="L_nickname" class="layui-form-label">
                                <span class="x-red">*</span>昵称
                            </label>
                            <div class="layui-input-inline">
                                <label for="L_nickname" class="layui-form-label">
                                    {{$data['nickname']}}
                                </label>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label for="role" class="layui-form-label">
                                <span class="x-red">*</span>选择角色
                            </label>
                            <div class="layui-input-inline layui-show-xs-block">

                                    <select name="role_id" id="role_id">
                                        <option value="{{$data['roles'][0]['id']}}" selected="true" >{{$data['roles'][0]['rolename']}}</option>
                                        @foreach($role as $k => $v)
                                            <option value="{{$v['id']}}">{{$v['rolename']}}</option>
                                        @endforeach
                                    </select>


                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label for="L_repass" class="layui-form-label"></label>
                            <button class="layui-btn" lay-filter="update" lay-submit="">更换角色</button>
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
                    var id = $('#id').val();
                    var role_id = $('#role_id').val();
                    // console.log(id);

                    $.ajax({
                        url:'doRoleAdmin',
                        type:'post',
                        dataType:"json",
                        data:{
                            id:id,
                            role_id:role_id,
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