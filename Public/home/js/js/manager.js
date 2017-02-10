// JavaScript Document
$(document).ready(function() {
	$(".inweui_tab_bd").eq(0).show().siblings().hide();
	$(".inweui_tabbar").eq(0).show().siblings().hide();
    $(".weui_navbar_item").click(function(){
		var i=$(this).index();
		$(".weui_navbar_item").eq(i).addClass("weui_bar_item_on").siblings().removeClass("weui_bar_item_on");
		$(".inweui_tab_bd").eq(i).show().siblings().hide();
		$(".inweui_tabbar").eq(i).show().siblings().hide();
		});
});