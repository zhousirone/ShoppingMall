<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />


    <title>中意家园网上商城</title>
    <meta name="Keywords" content="中意家园网上商城" />
    <meta name="Description" content="中意家园网上商城" />


    <link href="/web/css/style.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/web/js/-jquery-1.8.3.min.js"></script>
    <link href="/web/css/nav2.css" type="text/css" rel="stylesheet"><!--藏品分类 -->
    <link href="/web/css/amazeui.min.css" rel="stylesheet" />
    <script src="/web/js/amazeui.min.js"></script>

    <script type="text/javascript">
        <!--
        var timeout         = 500;
        var closetimer		= 0;
        var ddmenuitem      = 0;

        // open hidden layer
        function mopen(id)
        {
            // cancel close timer
            mcancelclosetime();

            // close old layer
            if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

            // get new layer and show it
            ddmenuitem = document.getElementById(id);
            ddmenuitem.style.visibility = 'visible';

        }
        // close showed layer
        function mclose()
        {
            if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
        }

        // go close timer
        function mclosetime()
        {
            closetimer = window.setTimeout(mclose, timeout);
        }

        // cancel close timer
        function mcancelclosetime()
        {
            if(closetimer)
            {
                window.clearTimeout(closetimer);
                closetimer = null;
            }
        }

        // close layer when click-out
        document.onclick = mclose;
        // -->
    </script>
</head>

<body>
<script src="/web/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/web/sxb.js"></script>
<style>
    .one_qcode{
        position:absolute;
        top:190px;
        width:200px;
        height:180px;
        background:#fff;
        text-align:center;
        color:#000;
        z-index:200;
    }
    .one_qcode img{
        margin:0 auto;
    }
</style>
<div class="qing tok">
    <div class="juzhong">
        <div class="lf" style="margin-left:0px;">欢迎来到中意家园网上商城！</div>
        <div class="rf toa">
            <ul id="sddm">
                <a href="#">Hi，请先登录</a>
                <a href="#" style="color:#ec2832; padding-left:0;">注册</a>
                <li style="padding-left:10px; background:url(images/wei.png) no-repeat left center; background-size:18px;">
                    <a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()">关注我们</a></a>
                    <div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                        <img src="/web/images/108430aeb.jpg" width="166" height="166"></div>
                </li>
                <li style="padding-left:10px; background:url(images/gwc.png) no-repeat left center; background-size:16px;">
                    <a href="#">购物车</a>
                    <span>|</span></a>
                </li>
                <a href="#">我的个人中心</a>
                <span>|</span>
                <a href="#">联系我们</a></ul>
        </div>
    </div>
</div>
<!--logo -->
<div class="qing lok">
    <div class="juzhong">
        <div style="height:100px; background-color: #fff;width: 216px; float:left; position:absolute; top:31px;">
            <div>
                <img src="images/jinyihe.png" style="height:100px; padding:0;margin: 5px auto;display: block;"></div>
        </div>
        <div class="rf">
            <form name="search" action="#" method="post" style="display:inline; float:left; width:500px;">
                <div class="souk">
                    <input type="text" name="gjz" id="gjz" placeholder="请输入关键字" class="sous">
                    <div class="sout">
                        <a href="#">空调</a>，
                        <a href="#">电器</a></div>
                    <input type="submit" value="" class="souc"></div>
                <div style="float:left; font-size:12px; margin-top:10px;">
                    <a href="" style=" color:#999;">电视</a>
                    <span style="margin:0 5px; color:#999;">|</span>
                    <a href="" style=" color:#999;">冰箱洗衣机</a>
                    <span style="margin:0 5px; color:#999;">|</span>
                    <a href="" style=" color:#999;">空调</a>
                    <span style="margin:0 5px; color:#999;">|</span>
                    <a href="" style=" color:#999;">厨卫电器</a>
                    <span style="margin:0 5px; color:#999;">|</span>
                    <a href="" style=" color:#999;">厨房小电</a>
                    <span style="margin:0 5px; color:#999;">|</span>
                    <a href="" style=" color:#999;">生活电器</a>
                </div>
            </form>
            <div class="myk">
                <div class="phone">
                    <p class="time">客户服务热线：</p>
                    <p class="tel" style="color:#464646; font-size:22px; font-weight:bold;">18953815888</p></div>
                <img src="/web/images/ewm.jpg" width="80" style="float:right;"></div>
        </div>
    </div>
</div>
<!--导航 -->
<div class="qing dabg" style=" overflow:visible; background:#e01222;">
    <div class="juzhong" style=" overflow:visible;">
        <div class="lf fenl">
            <div id="category-2015" onMouseOver="this.className='on'" onmouseleave="this.className=''">
                <div class="ld">
                    <img alt="所有产品分类" src="/web/images/flbg.png" width="21" height="15" class="lf">所有产品分类
                </div>
                <div id="allsort" style="background:#fff;">
                    <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
              <span>
                <a href="#" class="cpfltb1">日用家居</a>
                <b>></b>
              </span>
                        <div class="i-mc">
                            <div class="ejbox">
                                <a href="#">3免1
                                    <b>&gt;</b>
                                </a>
                                <a href="#">家装城
                                    <b>&gt;</b>
                                </a>
                                <a href="#">居家日用
                                    <b>&gt;</b>
                                </a>
                                <a href="#">精品家具
                                    <b>&gt;</b>
                                </a>
                                <a href="#">家装建材
                                    <b style="font-family:'宋体'">&gt;</b></a>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">厨具
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">烹饪锅具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">锅具套装</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">保温杯</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">刀剪菜板</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">厨房配件</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">水具酒具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">餐具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">茶具/咖啡具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">保鲜盒</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">家纺
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">床品套件</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">被子</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">枕芯</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">蚊帐</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">凉席</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">毛巾浴巾</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">地毯地垫</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">床垫/床褥</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">毯子</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">抱枕靠垫</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">窗帘/窗纱</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">床单/床笠</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">被套</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">枕巾枕套</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">沙发垫套/椅垫</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">桌布/罩件</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电热毯</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">布艺软饰</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">生活日用
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">收纳用品</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">雨伞雨具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">净化除味</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">浴室用品</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">洗晒/熨烫</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">缝纫/针织用品</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">清洁工具</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">家装软饰
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">装饰字画</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">装饰摆件</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">手工/十字绣</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">相框/照片墙</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">墙贴/装饰贴</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">花瓶花艺</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">香薰蜡烛</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">节庆饰品</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">钟饰</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">帘艺隔断</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">创意家居</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">保暖防护</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">灯具
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">吸顶灯</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">吊灯</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">台灯</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">筒灯射灯</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">装饰灯</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">LED灯</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">氛围照明</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">落地灯</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">庭院灯</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">应急灯/手电</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">节能灯</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">家具
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">卧室家具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">客厅家具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">餐厅家具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">书房家具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">儿童家具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">储物家具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">阳台/户外</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">办公家具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">床</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">床垫</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">沙发</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电脑椅</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">衣柜</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">茶几</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电视柜</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">餐桌</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电脑桌</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">鞋架/衣帽架</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">儿童桌椅</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">儿童床</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">晾衣架</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
              <span>
                <a href="#" class="cpfltb2">美妆个护</a>

                <b>></b>
              </span>
                        <div class="i-mc">
                            <div class="ejbox">
                                <a href="#">清洁用品
                                    <b>&gt;</b>
                                </a>
                                <a href="#">美妆馆
                                    <b>&gt;</b>
                                </a>
                                <a href="#">个护馆
                                    <b>&gt;</b>
                                </a>
                                <a href="#">妆比社
                                    <b>&gt;</b>
                                </a>
                                <a href="#">全球购美妆
                                    <b style="font-family:'宋体'">&gt;</b></a>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">面部护肤
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">补水保湿</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">卸妆</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">洁面</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">爽肤水</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">乳液面霜</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">精华</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">眼霜</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">防晒</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">面膜</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">剃须</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">套装</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">洗发护发
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">洗发</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">护发</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">染发</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">造型</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">假发</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">美发工具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">套装</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">身体护理
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">补水保湿</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">沐浴</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">润肤</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">精油</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">颈部</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">手足</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">纤体塑形</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">美胸</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">套装</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">口腔护理
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">牙膏/牙粉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">牙刷/牙线</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">漱口水</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">套装</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">女性护理
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">卫生巾</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">卫生护垫</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">私密护理</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">脱毛膏</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">香水彩妆
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">BB霜</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">化妆棉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">女士香水</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">男士香水</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">底妆</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">眉笔</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">睫毛膏</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">眼线</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">眼影</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">唇膏/彩</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">腮红</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">美甲</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">美妆工具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">套装</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">清洁用品
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">纸品湿巾</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">衣物清洁</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">清洁工具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">家庭清洁</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">一次性用品</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">驱虫用品</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">皮具护理</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">宠物生活
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">水族世界</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">狗粮</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">猫粮</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">猫狗罐头</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">狗零食</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">猫零食</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">医疗保健</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">宠物玩具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">宠物服饰</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">猫狗窝</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">洗护美容</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">猫砂/猫砂盆</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">狗厕所/尿垫</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">宠物牵引</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">食具水具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">小宠用品</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
              <span>
                <a href="#" class="cpfltb3">食品特产</a>
                <b>></b>
              </span>
                        <div class="i-mc">
                            <div class="ejbox">
                                <a href="#">生鲜
                                    <b>&gt;</b>
                                </a>
                                <a href="#">食品饮料
                                    <b>&gt;</b>
                                </a>
                                <a href="#">酒类
                                    <b>&gt;</b>
                                </a>
                                <a href="#">地方特产
                                    <b>&gt;</b>
                                </a>
                                <a href="#">全球购美食
                                    <b style="font-family:'宋体'">&gt;</b></a>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">新鲜水果
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">苹果</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">香蕉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">梨</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">橙子</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">奇异果/猕猴桃</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">火龙果</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">榴莲</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">柚子</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">百香果</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">石榴</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">国产水果</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">进口水果</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">蔬菜蛋品
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">蛋品</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">叶菜类</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">根茎类</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">葱姜蒜椒</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">鲜菌菇</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">茄果瓜类</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">半加工蔬菜</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">半加工豆制品</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">玉米</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">山药</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">地瓜/红薯</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">精选肉类
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">猪肉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">牛肉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">羊肉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">鸡肉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">鸭肉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">冷鲜肉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">特色肉类</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">内脏类</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">冷藏熟食</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">牛排</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">牛腩</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">鸡翅</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">海鲜水产
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">鱼类</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">虾类</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">蟹类</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">贝类</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">海参</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">活鲜</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">特色水产</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">海产干货</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">三文鱼</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">小龙虾</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">大闸蟹</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">海产礼盒</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">冷饮冻食
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">水饺/馄饨</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">汤圆/元宵</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">面点</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">烘焙半成品</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">奶酪/黄油</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">方便速食</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">火锅丸串</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">冰淇淋</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">冷藏果蔬汁</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">低温乳品</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">中外名酒
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">白酒</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">葡萄酒</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">洋酒</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">啤酒</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">黄酒/养生酒</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">收藏酒/陈年老酒</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
              <span>

                <a href="#" class="cpfltb4">店铺展示</a>
                <b>></b>
              </span>

                    </div>
                    <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
              <span>

                <a href="#" class="cpfltb5">珠宝首饰</a>
                <b>></b>
              </span>
                        <div class="i-mc">
                            <div class="ejbox">

                                <a href="#">自营箱包
                                    <b>&gt;</b>
                                </a>
                                <a href="#">时尚鞋包
                                    <b>&gt;</b>
                                </a>
                                <a href="#">国际珠宝馆
                                    <b>&gt;</b>
                                </a>
                                <a href="#">奢侈品
                                    <b style="font-family:'宋体'">&gt;</b></a>
                            </div>

                            <div class="ejlei">
                                <a href="#" class="ejlei1">潮流女包
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">真皮包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">单肩包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">手提包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">斜挎包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">双肩包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">钱包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">手拿包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">卡包/零钱包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">钥匙包</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">精品男包
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">男士钱包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">双肩包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">单肩/斜挎包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">商务公文包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">男士手包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">卡包名片夹</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">钥匙包</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">功能箱包
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">拉杆箱</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">拉杆包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">旅行包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电脑包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">休闲运动包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">书包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">登山包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">腰包/胸包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">旅行配件</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">相机包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">妈咪包</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">奢侈品
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">箱包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">钱包</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">服饰</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">腰带</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">鞋靴</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">太阳镜/眼镜框</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">饰品</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">配件</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">精选大牌
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">GUCCI</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">COACH</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">雷朋</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">施华洛世奇</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">MK</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">阿玛尼</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">菲拉格慕</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">VERSACE</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">普拉达</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">巴宝莉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">万宝龙</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">钟表
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">天梭</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">浪琴</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">欧米茄</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">泰格豪雅</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">DW</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">卡西欧</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">西铁城</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">天王</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">瑞表</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">国表</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">日韩表</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">欧美表</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">德表</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">儿童手表</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">智能手表</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">闹钟</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">挂钟</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">座钟</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">钟表配件</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">珠宝首饰
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">黄金</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">K金</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">时尚饰品</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">钻石</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">翡翠玉石</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">银饰</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">水晶玛瑙</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">彩宝</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">铂金</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">木手串/把件</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">珍珠</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">发饰</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
              <span>

                <a href="#" class="cpfltb6">数码办公</a>
                <b>></b>
              </span>
                        <div class="i-mc">
                            <div class="ejbox">
                                <a href="#">玩3C
                                    <b>&gt;</b>
                                </a>
                                <a href="#">本周热卖
                                    <b>&gt;</b>
                                </a>
                                <a href="#">企业采购
                                    <b>&gt;</b>
                                </a>
                                <a href="#">GAME+
                                    <b>&gt;</b>
                                </a>
                                <a href="#">装机大师
                                    <b style="font-family:'宋体'">&gt;</b></a>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">电脑整机
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">笔记本</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">游戏本</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">平板电脑</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">平板电脑配件</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">台式机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">一体机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">服务器/工作站</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">笔记本配件</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">电脑配件
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">显示器</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">CPU</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">主板</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">显卡</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">硬盘</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">内存</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">机箱</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电源</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">散热器</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">刻录机/光驱</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">声卡/扩展卡</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">装机配件</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">SSD固态硬盘</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">组装电脑</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">外设产品
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">鼠标</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">键盘</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">键鼠套装</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">网络仪表仪器</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">U盘</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">移动硬盘</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">鼠标垫</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">摄像头</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">线缆</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">手写板</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">硬盘盒</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电脑工具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电脑清洁</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">UPS电源</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">插座</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">游戏设备
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">游戏机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">游戏耳机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">手柄/方向盘</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">游戏软件</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">游戏周边</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">网络产品
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">路由器</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">网络机顶盒</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">交换机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">网络存储</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">网卡</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">4G/3G上网</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">网络配件</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">办公设备
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">投影机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">投影配件</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">多功能一体机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">打印机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">传真设备</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">验钞/点钞机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">扫描设备</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">复合机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">碎纸机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">考勤机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">收银机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">会议音频视频</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">保险柜</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">装订/封装机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">安防监控</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">办公家具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">白板</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">文具耗材
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">硒鼓/墨粉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">墨盒</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">色带</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">纸类</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">办公文具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">学生文具</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">文件管理</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">本册/便签</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">计算器</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">笔类</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">画具画材</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">财会用品</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">刻录碟片/附件</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
              <span>
                <a href="#" class="cpfltb7">家用电器</a>
                <b>></b>
              </span>
                        <div class="i-mc">
                            <div class="ejbox">
                                <a href="#">家电馆
                                    <b>&gt;</b>
                                </a>
                                <a href="#">生活电器
                                    <b>&gt;</b>
                                </a>
                                <a href="#">商用家电
                                    <b>&gt;</b>
                                </a>
                                <a href="#">高端电器
                                    <b>&gt;</b>
                                </a>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">电视
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">曲面电视</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">超薄电视</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">HDR电视</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">OLED电视</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">4K超清电视</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">55英寸</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">65英寸</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电视配件</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">空调
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">壁挂式空调</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">柜式空调</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">中央空调</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">以旧换新</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">0元安装</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">空调配件</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">洗衣机
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">滚筒洗衣机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">洗烘一体机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">波轮洗衣机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">迷你洗衣机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">烘干机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">洗衣机配件</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">冰箱
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">多门</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">对开门</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">三门</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">双门</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">冷柜/冰吧</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">酒柜</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">冰箱配件</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">厨卫大电
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">油烟机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">燃气灶</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">烟灶套装</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">消毒柜</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">洗碗机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电热水器</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">燃气热水器</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">嵌入式厨电</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">商用厨房电器</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">厨房小电
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电饭煲</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">微波炉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电烤箱</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电磁炉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电陶炉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电压力锅</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">空气炸锅</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">豆浆机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">咖啡机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">面包机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">榨汁机/原汁机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">料理机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电饼铛</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">养生壶/煎药壶</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">酸奶机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">煮蛋器</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">面条机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电水壶/热水瓶</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电炖锅</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">多用途锅</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电烧烤炉</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电热饭盒</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">其它厨房电器</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">生活电器
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">取暖电器</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">冷风扇</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">吸尘器/除螨仪</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">净化器</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">扫地机器人</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">加湿器</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">挂烫机/熨斗</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电风扇</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">插座</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">电话机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">饮水机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">净水器</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">除湿机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">干衣机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">清洁机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">收录/音机</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">毛球修剪器</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">其它生活电器</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">生活电器配件</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
              <span>

                <a href="#" class="cpfltb8">生活服务</a>
                <b>></b>
              </span>
                        <div class="i-mc">
                            <div class="ejbox">
                                <a href="#">优惠专区
                                    <b>&gt;</b>
                                </a>
                                <a href="#">男装
                                    <b>&gt;</b>
                                </a>
                                <a href="#">女装
                                    <b>&gt;</b>
                                </a>
                                <a href="#">童装
                                    <b>&gt;</b>
                                </a>
                                <a href="#">内衣
                                    <b style="font-family:'宋体'">&gt;</b></a>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">女装
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">邮票</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">钱币</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">邮资封片</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">磁卡</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">票证</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">礼品册</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">少儿
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">0-2岁</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">3-6岁</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">7-10岁</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">11-14岁</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">儿童文学</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">绘本</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">科普</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">幼儿启蒙</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">手工游戏</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">智力开发</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">少儿英语</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">动漫卡通</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">学前教育</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">美术书法</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">少儿国学</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">教育
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">教材</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">中小学教辅</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">考试</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">外语学习</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">字典词典</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">课外读物</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">英语四六级</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">会计类考试</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">国家公务员</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">文艺
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">小说</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">文学</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">青春文学</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">传记</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">动漫</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">艺术</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">摄影</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">书法</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">音乐</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">绘画</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">经管励志
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">管理</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">金融与投资</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">经济</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">励志与成功</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">市场营销</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">股票</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">智能经济</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">人文社科
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">历史</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">心理学</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">政治/军事</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">国学/古籍</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">哲学/宗教</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">社会科学</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">法律</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">文化</a></div>
                            </div>
                            <div class="ejlei">
                                <a href="#" class="ejlei1">生活
                                    <b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
                                <div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">育儿/家教</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">孕产/胎教</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">健身保健</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">旅游/地图</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">美食</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">时尚美妆</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">家居</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">手工DIY</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">两性</a>
                                    <a href="#" class="cate_detail_con_lk" target="_blank">体育</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--分类end -->
        </div>
        <div class="rf nav" style="float:left;margin-left: 5px;">
            <a href="marketdisplay">
                <div>
                    <span style=" color:#fff;">首页</span>
                    <span style=" color:#fff;">首页</span></div>
                <b>
                </b>
            </a>
            <a href="#">
                <div>
                    <span style=" color:#fff;">产品专区</span>
                    <span style=" color:#fff;">产品专区</span></div>
                <b>
                </b>
            </a>
            <a href="#">
                <div>
                    <span style=" color:#fff;">优惠券专区</span>
                    <span style=" color:#fff;">优惠券专区</span></div>
                <b>
                </b>
            </a>
            <a href="#">
                <div>
                    <span style=" color:#fff;">购物券专区</span>
                    <span style=" color:#fff;">购物券专区</span></div>
                <b>
                </b>
            </a>
            <a href="#">
                <div>
                    <span style=" color:#fff;">重消专区</span>
                    <span style=" color:#fff;">重消专区</span></div>
                <b>
                </b>
            </a>
            <a href="#">
                <div>
                    <span style=" color:#fff;">团购专区</span>
                    <span style=" color:#fff;">团购专区</span></div>
                <b>
                </b>
            </a>
            <a href="#">
                <div>
                    <span style=" color:#fff;">秒杀专区</span>
                    <span style=" color:#fff;">秒杀专区</span></div>
                <b>
                </b>
            </a>
            <a href="#">
                <div>
                    <span style=" color:#fff;">申请代理</span>
                    <span style=" color:#fff;">申请代理</span></div>
                <b>
                </b>
            </a>
            <a href="#">
                <div>
                    <span style=" color:#fff;">加盟商网点</span>
                    <span style=" color:#fff;">加盟商网点</span></div>
                <b>
                </b>
            </a>
        </div>
    </div>
</div>
<div style="width:1200px; margin:0 auto;">
    <div style="width:900px; float:right;">
        <!--页面标题 -->
        <div class="qing cenk">
            <div class="juzhong" style="width:900px;">
                <div class="qing zilk">
                    <div class="lf">
                        <div class="touk" style="background: url(images/moren_touxiang.jpg) center center no-repeat;border-radius:100px;"><img src="/web/images/txk.png" width="122" height="122"></div>
                        <div class="lf">
                            <div class="yhm">{{$name}}</div>
                            <a href="#" class="bjtx"><p style="float:left; line-height:25px; color:#000;">账户安全：</p><div style=" float:left; margin-left:5px;height:25px; background:#fff; width:100px;"><p style="height:25px; background:#e01222; width:30px;"></p></div></a>
                            <p style="    line-height: 24px;">最后登录地址：{{$ip}}</p>
                            <p style="    line-height: 24px;">最后登录时间：{{$time}}</p>
                        </div>
                    </div>
                    <div class="rf wdjf">

                        <div class="fen2">昨日释放金额：</div>
                        <div class="fen2">今日释放金额：</div>
                        <div class="fen2">代金券总额度：</div>
                        <div class="fen2">优惠券总额度：</div>
                        <div class="fen2">购物券总额度：</div>
                    </div>
                </div>
                <div class="qing mynav">
                    <a href="daifukuan.html" style="background:#fdfcf3 url(images/dfk.png) no-repeat 50px center; background-size:20px;">待付款</a>
                    <a href="daipingjia.html" style="background:#fdfcf3 url(images/pj.png) no-repeat 50px center; background-size:20px;">待评价</a>
                    <a href="daishouhuo.html" style="background:#fdfcf3 url(images/sh.png) no-repeat 50px center; background-size:20px;">待收货</a>
                    <a href="tuikuan.html" style="background:#fdfcf3 url(images/tk.png) no-repeat 50px center; background-size:20px;">退货详情</a>
                </div>
            </div>
        </div>
        <!--会员内容 -->
        <div class="qing juzhong" style="width:900px;">


            <div style="width:900px; line-height:40px; background:#e01222; color:#FFF; font-size:16px; padding-left:15px;">收货地址</div>


            <div class="qing juzhong" style="width:900px;">
                <div class="cenbg" style="margin-bottom:40px;">
                    <div class="addk">
                        <a href="locationAdd?id={{$id}}" class="add">
                            <div class=" add-tj"><img src="{{asset('web/images/dizhi_03.png')}}" width="39" height="39">添加新地址</div>
                        </a>
                        @foreach($data as $k => $v)
                        <div class="address_li add" id="div_address_id_41">
                            <div class="ad-m">{{$v->name}}</div>
                            <div class="ad-js">
                                {{$v->phone}}<br>
                                {{$v->location}}<br>
                                {{$v->detailed}}<br>
                            </div>
                            <div class="ad-bj">
                                <a href="locationUpd?id={{$v->id}}">修改</a><a href="locationDel?id={{$v->id}}">删除</a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!--页码 -->
                    <div class="qing yema">
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <a href="#" class="sye"></a>
                                    <a href="#" class="yeen"><span>1</span><span>1</span></a>
                                    <a href="#" class="xye"></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="grzx_l">
        <div class="photo">
            <img src="/web/images/moren_touxiang.jpg" width="100%"><p>个人中心</p>
        </div>
        <ul style="padding-bottom:20px;">
            <li style="height:50px;"><a><img src="/web/images/wdxx.png" width="25"><p style="padding:0; color:#000; font-size:16px; line-height:50px;">我的交易</p></a></li>
            <li><a href="myOrder?id={{$id}}"><p>我的订单</p></a></li>
            <li><a href="wodeyue.html"><p>我的余额</p></a></li>
            <li><a href="wodeshouyi.html"><p>我的收益</p></a></li>
            <li><a href="wodeyinhangka.html"><p>我的银行卡</p></a></li>
            <li><a href="woyaochongzhi.html"><p>我的充值</p></a></li>
            <li style="height:50px;"><a><img src="/web/images/tk.png" width="25"><p style="padding:0; color:#000; font-size:16px; line-height:50px;">资产中心</p></a></li>
            <li><a href="youhuiquan.html"><p>优惠券</p></a></li>
            <li><a href="gouwuquan.html"><p>购物券</p></a></li>
            <li><a href="chongxiaoquan.html"><p>重消券</p></a></li>
            <li><a href="daijinquan.html"><p>代金券</p></a></li>
            <li style="height:50px;"><a><img src="/web/images/xfjl.png" width="25"><p style="padding:0; color:#000; font-size:16px; line-height:50px;">会员资料</p></a></li>
            <li><a href="personalCenter"><p>个人资料</p></a></li>
            <li><a href="myLocation?id={{$id}}"><p>收货地址</p></a></li>
            <li><a href="bangdingshoujihao.html"><p>绑定手机号</p></a></li>
            <li><a href="erjimima.html"><p>二级密码</p></a></li>
            <li><a href="shenqingjiamengdian.html"><p>申请加盟店</p></a></li>
            <li><a href="wodetuijian.html"><p>我的推荐</p></a></li>
            <li><a href="liuyan.html"><p>留言</p></a></li>

            <li style="height:50px;"><a><img src="/web/images/wdsp.png" width="25"><p style="padding:0; color:#000; font-size:16px; line-height:50px;">推广管理</p></a></li>
            <li style="border-bottom:none;"><a href="gerenziliao.html"><p>生成我的二维码</p></a></li>
        </ul>
    </div>
</div>


</div>


<div class="qing banq">所有图片均受著作权保护，未经许可任何单位与个人不得使用、复制、转载、摘编，违者必究法律责任 。</div>
<div class="qing banq" style="margin-bottom:20px;">鲁ICP备15028488号Copyright 中意商城2017，All Rights Reserved</div>


</body>
</html>
