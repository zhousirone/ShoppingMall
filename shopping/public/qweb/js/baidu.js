function create_element_with_html(htmlStr) {
    var frag = document.createDocumentFragment(),
        temp = document.createElement('div');
    temp.innerHTML = htmlStr;
    while (temp.firstChild) {
        frag.appendChild(temp.firstChild);
    }
    return frag;
}

var selectListShow = 0;
$(function() {
$("#type,.searchselectbtn").click(function() {
if (selectListShow) {
$("#selectTypeList").slideUp("fast");
selectListShow = 0;
} else {
$("#selectTypeList").slideDown("fast");
selectListShow = 1;
}
return false;
});
$("body").click(function() {
if (selectListShow) {
$("#selectTypeList").slideUp("fast");
selectListShow = 0;
}
});
$(".searchselect li").click(function() {
$("#type").text($(this).text());
$("#type").attr("typename", $(this).attr("typename"));
$(this).parent().hide();
});

$("#searchbtn").click(function() {
search();
});
$("#search_key").keyup(function(e) {
            if (e.keyCode == 13) {
                search();
            }
        });
});
function search() {
var k = $.trim($('#search_key').val());
if (k.length == 0) {
///alert('请输入关键词！');
return;
}
var t = $("#type").attr("typename");
window.location = "网址/search/index.php?type=" + t + "&q=" + encodeURI(k);
}
/*描点*/
function goto(elements) {
var pos = 0;
if (elements!=="") {
pos = $("#"+elements).offset().top;
};
$("html,body").animate({scrollTop: pos-20}, 300);
}
$(function(){
   $("#right_select a").click(function(){
         $("#right_select a").removeClass("on");
         $(this).addClass("on");
   });
});


///收藏
function AddFavorite(sURL, sTitle)  
{  
   try  
   {  
       window.external.addFavorite(sURL, sTitle);  
   }  
   catch (e)  
   {  
       try  
       {  
           window.sidebar.addPanel(sTitle, sURL, "");  
       }  
       catch (e)  
       {  
           alert("加入收藏失败，请使用Ctrl+D进行添加");  
       }  
   }  
}