<!DOCTYPE html>
<html class="x-admin-sm">

<<<<<<< HEAD
@extends('common.header')
=======
@extends('admin.common.header')
>>>>>>> dong
<script src="/ad/admin/lib/layui/layui.js" charset="utf-8"></script>
<script type="text/javascript" src="/ad/admin/js/xadmin.js"></script>

<body>
<div class="layui-fluid">
    <div class="layui-row">
<<<<<<< HEAD
        <form action="" method="post" class="layui-form layui-form-pane">
            <div class="layui-form-item">
                <label for="name" class="layui-form-label">
                    <span class="x-red">*</span>角色名
                </label>
=======
        <form action="sku_add" method="post" class="layui-form layui-form-pane">
            <div class="layui-form-item">
                {{--                <label for="name" class="layui-form-label">--}}
                {{--                    @foreach($list as $kye=>$value)--}}
                <span class="x-red">*</span>添加商品
                {{--                    @endforeach--}}
                {{--                </label>--}}
                {{--                <a class="layui-btn" title="修改" href="attr_value">属性值管理</a>--}}
>>>>>>> dong
                <div class="layui-input-inline">
                    <input type="text" id="name" name="name" required="" lay-verify="required"
                           autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">
<<<<<<< HEAD
                    拥有权限
=======
                    拥有
>>>>>>> dong
                </label>
                <table  class="layui-table layui-input-block">
                    <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" name="like1[write]" lay-skin="primary" lay-filter="father" title="颜色管理">
                        </td>
                        <td>
                            <div class="layui-input-block">
                                @foreach($data as $k=>$v)
<<<<<<< HEAD
                                <input name="id[]" lay-skin="primary" type="checkbox" value="{{$v['color_value']}}" title="{{$v['color']}}" >
                               @endforeach
=======
                                    <input name="id[]" id="color" lay-skin="primary" type="checkbox" value="{{$v['color']}}" title="{{$v['color']}}" >
                                @endforeach
>>>>>>> dong

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="尺寸管理" lay-filter="father">
                        </td>
                        <td>
                            <div class="layui-input-block">
                                @foreach($data as $k=>$v)
<<<<<<< HEAD
                                <input name="id[]" lay-skin="primary" type="checkbox" value="{{$v['size_value']}}" title="{{$v['size']}}">
                                 @endforeach
=======
                                    <input name="id[]" lay-skin="primary" type="checkbox" value="{{$v['size']}}" title="{{$v['size']}}" >
                                @endforeach

>>>>>>> dong
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <input name="id[]" lay-skin="primary" type="checkbox" value="2" title="价格管理" lay-filter="father">
                        </td>
                        <td>
                            <div class="layui-input-block">
                                @foreach($data as $k=>$v)
<<<<<<< HEAD
                                    <input name="id[]" lay-skin="primary" type="checkbox" value="{{$v['price_value']}}" title="{{$v['price']}}">
=======
                                    <input name="id[]" lay-skin="primary" type="checkbox" value="{{$v['price']}}" title="{{$v['price']}}">
>>>>>>> dong
                                @endforeach
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="layui-form-item layui-form-text">
                <label for="desc" class="layui-form-label">
                    描述
                </label>
                <div class="layui-input-block">
<<<<<<< HEAD
                    <textarea placeholder="请输入内容" id="desc" name="desc" class="layui-textarea"></textarea>
                </div>
            </div>
            <div class="layui-form-item">
                <button class="layui-btn" lay-submit="" lay-filter="add">增加</button>
=======
                    <textarea placeholder="请输入内容" id="desc" class="layui-textarea"></textarea>
                </div>
            </div>
            <div class="layui-form-item">
                {{--                <button lay-submit="" lay-filter="add">增加</button>--}}
                <input type="submit" value="提交" class="layui-btn">
>>>>>>> dong
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="../../../jquery-3.3.1.min.js"></script>
<script>
    layui.use(['form','layer'], function(){
        $ = layui.jquery;
        var form = layui.form
            ,layer = layui.layer;

        //自定义验证规则
        form.verify({
            nikename: function(value){
                if(value.length < 5){
                    return '昵称至少得5个字符啊';
                }
            }
            ,pass: [/(.+){6,12}$/, '密码必须6到12位']
            ,repass: function(value){
                if($('#L_pass').val()!=$('#L_repass').val()){
                    return '两次密码不一致';
                }
            }
        });

        //监听提交
        form.on('submit(add)', function(data){
            console.log(data);
            //发异步，把数据提交给php
            layer.alert("增加成功", {icon: 6},function () {
                // 获得frame索引
                var index = parent.layer.getFrameIndex(window.name);
                //关闭当前frame
                parent.layer.close(index);
            });
            return false;
        });


        form.on('checkbox(father)', function(data){

            if(data.elem.checked){
                $(data.elem).parent().siblings('td').find('input').prop("checked", true);
                form.render();
            }else{
                $(data.elem).parent().siblings('td').find('input').prop("checked", false);
                form.render();
            }
        });


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