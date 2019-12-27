$(document).ready(function(){
var $container = $('#goods_container');
$container.imagesLoaded(function(){
$container.masonry({
itemSelector: '.item',
columnWidth : 232,
isAnimated:false,
gutterWidth:10,
isFitWidth:false,
isResizableL:false,
isRTL:false
});
});
$container.infinitescroll({
navSelector : '#page-nav', 
nextSelector : '#page-nav a', 
itemSelector : '.item', 
animate: false,
extraScrollPx: 350,
loading: {
finishedMsg: '<em>暂无更多商品</em>',
img: '../images/loading.gif'
}
},
function( newElements ) {
var $newElems = $( newElements ).css({ opacity: 0 });
$newElems.imagesLoaded(function(){
$newElems.animate({ opacity: 1 });
$container.masonry( 'appended', $newElems, true );
});
}
);
});