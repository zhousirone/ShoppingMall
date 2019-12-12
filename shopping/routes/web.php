<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::any('index','admin\Index@index');
Route::any('show','admin\Index@show');

Route::any('login','admin\Index@login');
Route::any('doLogin','admin\Index@doLogin');
Route::any('test','admin\Index@test');



Route::any('addAdmin','admin\Admins@addAdmin');
Route::any('doAddAdmin','admin\Admins@doAddAdmin');
Route::any('listAdmin','admin\Admins@listAdmin');
Route::any('updAdmin','admin\Admins@updAdmin');
Route::any('doUpdAdmin','admin\Admins@doUpdAdmin');
Route::any('roleAdmin','admin\Admins@roleAdmin');
Route::any('doRoleAdmin','admin\Admins@doRoleAdmin');

Route::any('updPower','admin\Roles@updPower');
Route::any('addRole','admin\Roles@addRole');
Route::any('doAddRole','admin\Roles@doAddRole');
Route::any('listRole','admin\Roles@listRole');


Route::any('addMenu','admin\Menus@index');
Route::any('doAddMenu','admin\Menus@create');


//

Route::get('goods_list', 'admin\GoodsController@goods_list');//商品属性列表
Route::get('attr_add', 'admin\GoodsController@attr_add');//列表添加
Route::post('add_list', 'admin\GoodsController@add_list');//商品属性管理添加方法
Route::get('classification', 'admin\GoodsController@classification');//分类
Route::any('status_upd', 'admin\GoodsController@status_upd');
Route::any('del', 'admin\GoodsController@del');//删除
Route::any('attr_value', 'admin\AttributeValue@attr_value');//属性值列表
Route::any('attr_upd', 'admin\AttributeValue@attr_upd');//属性值修改
Route::any('upd', 'admin\AttributeValue@upd');//编辑要修改属性值
Route::any( 'value_add','admin\AttributeValue@value_add');//修改完跳转
Route::any( 'value_list','admin\AttributeValue@value_list');//属性值添加

Route::any( 'update_id','admin\GoodsController@update_id');//分配找到下级  any代表展示全部
Route::any( 'value_upd','admin\AttributeValue@value_upd');//属性值删除

Route::get( 'attribute_class','admin\GoodsManage@attribute_class');//属性分类管理展示表单  添加商品列表
Route::post( 'list_class','admin\GoodsManage@list_class');//属性分类管理展示
Route::get( 'goods_show','admin\GoodsManage@goods_show');//商品管理展示
Route::any( 'goods_sku','admin\GoodsManage@goods_sku');//sku列表展示
Route::any( 'sku_add','admin\GoodsManage@sku_add');//sku添加方法
Route::any( 'bland','admin\GoodsManage@bland');//sku添加方法
Route::any( 'class_list','admin\GoodsManage@class_list');//sku  列表展示
Route::any( 'goods_li','admin\GoodsManage@goods_li');//sku  商品列表展示
//前台
Route::any( 'indexlogin','index\proscenium@login');//登录列表
Route::any( 'login_add','index\proscenium@login_add');//登录方法
Route::any( 'register','index\proscenium@register');//register 注册列表
Route::any( 'register_add','index\proscenium@register_add');//注册方法

Route::any( 'marketdisplay','index\market@marketdisplay');//商场展示