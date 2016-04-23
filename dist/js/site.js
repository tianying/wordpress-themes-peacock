var $ = jQuery.noConflict();

jQuery(document).ready(function( $ ) {
		// 二级菜单隐藏/显示
		var element = $("ul#menu-mainmenu.mainmenu li.menu-item");
		
		// 鼠标经过样式
		element.mouseover(function(){
			$(this).children("ul.sub-menu").css("display","block");
        });

		// 鼠标离开演示
		element.mouseout(function(){
			$(this).children("ul.sub-menu").css("display","none");
        });
});
