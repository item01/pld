// JavaScript Document

$(document).ready(function(){
		setInterval(function(){
			$("#weather").animate({left:'1500'},100000).animate({left:'50px'},100000);
		});
		setInterval(function(){
			$("#weather1").animate({right:'1500'},100000).animate({left:'150px'},100000);
		});
			
		})


$(function(){
	$(".nav li dl").hide();
	$(".nav li").hover(function(){
		$(this).children("dl").slideDown()	
	}, function(){
		$(this).children("dl").slideUp()		
	})	
})


//must window loading,don't use the document loading
$(window).load(function(){
	
	//悬浮客服
	$("#fixedBox2").fix({
		position 		: "left",	//悬浮位置 - left或right
		horizontal  	: 0,		//水平方向的位置 - 默认为数字
		vertical    	: null,		//垂直方向的位置 - 默认为null
		halfTop     	: false,	//是否垂直居中位置
		minStatue 		: false,	//是否最小化
		hideCloseBtn 	: false,	//是否隐藏关闭按钮
		skin 			: "orange",	//皮肤
		showBtnWidth 	: 28,       //show_btn_width
		contentBoxWidth : 154, 		//side_content_width
		durationTime 	: 600		//完成时间
	});
	
	//悬浮客服
	$("#fixedBox").fix({
		position 		: "right",	//悬浮位置 - left或right
		horizontal  	: 0,		//水平方向的位置 - 默认为数字
		vertical    	: 100,      //垂直方向的位置 - 默认为null
		halfTop     	: true,	    //是否垂直居中位置
		minStatue 		: false,	//是否最小化
		hideCloseBtn 	: false,	//是否隐藏关闭按钮
		skin 			: "orange",	//皮肤
		showBtnWidth 	: 28,       //show_btn_width
		contentBoxWidth : 154, 		//side_content_width
		durationTime 	: 1000		//完成时间
	});
	
});








































