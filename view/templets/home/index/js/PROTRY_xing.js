$(function(){
	$(".bd11 ul li").hover(function(){
	var x=$(".bd11 ul li").index(this);
	$(".datu li").fadeOut(500);
	$(".datu li").eq(x).fadeIn(500);
		
		},function(){
			
			
			})
	})
$(function(){
	$(".wenti li").hover(function(){
	var x=$(".wenti li").index(this);
	$(".wenti li").removeClass("dq");
	$(".wenti li").eq(x).addClass("dq");
	$(".neirong01").hide();
	$(".neirong01").eq(x).show();
		
		},function(){
			
			
			})
	})	
$(function(){
	$(".tuji").hover(function(){
		$(this).children(".tu_img").children(".xihuan").show();
		},function(){
		$(this).children(".tu_img").children(".xihuan").hide();	
			
			})
	
	
	
	})	
$(function(){
	$(".picList li img").click(function(){
		var x=$(".picList li img").index(this);
		$(".picList li img").removeClass("ccc");
		$(".picList li img").eq(x).addClass("ccc");
		$(".zhuan_top li").fadeOut(500);
		$(".zhuan_top li").eq(x).fadeIn(500);
		
		
		
		
		})
	
	
	
	})	