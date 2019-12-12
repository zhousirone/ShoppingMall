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
Route::any('addPower','admin\Menus@addPower');
Route::any('doAddPower','admin\Menus@doAddPower');
Route::any('listMenu','admin\Menus@listMenu');
Route::any('delMenu','admin\Menus@delMenu');




Route::get('showAdd','admin\Warehouse@showAdd');
Route::post('warehouseAdd','admin\Warehouse@warehouseAdd');
Route::get('warehouseShow','admin\Warehouse@warehouseShow');
Route::get('warehouseDel','admin\Warehouse@warehouseDel');



Route::get('warehouseUpd','admin\Warehouse@warehouseUpd');




Route::any('updata','admin\Warehouse@updata');



Route::any('index/login','index\Login@index');
Route::any('index/regist','index\Login@regist');








Route::any('goods_add', 'GoodsController@goods_list');//列表
Route::any('attr_add', 'GoodsController@attr_add');
Route::any('add_list', 'GoodsController@add_list');
Route::any('classification', 'GoodsController@classification');
Route::any('status_upd', 'GoodsController@status_upd');
Route::any('del', 'GoodsController@del');//删除
Route::any('attr_value', 'AttributeValue@attr_value');//属性值列表
Route::any('attr_upd', 'AttributeValue@attr_upd');//属性值修改
Route::any('upd', 'AttributeValue@upd');//编辑要修改属性值
Route::any( 'value_add','AttributeValue@value_add');//修改完跳转
Route::any( 'value_list','AttributeValue@value_list');//属性值添加
Route::any( 'update_id','GoodsController@update_id');//分配找到下级  any代表展示全部
Route::any( 'value_upd','AttributeValue@value_upd');//属性值删除
Route::any( 'attribute_class','GoodsManage@attribute_class');//属性分类管理展示表单
Route::any( 'list_class','GoodsManage@list_class');//属性分类管理展示
Route::any( 'goods_show','GoodsManage@goods_show');//商品管理展示
Route::any( 'goods_sku','GoodsManage@goods_sku');//sku展示