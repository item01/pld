$(function(){
	
	$(".ce_nav li").hover(function(){
		var x=$(".ce_nav li").index(this);
		$(".ce_nav li").removeClass("xai");
		
		$(".ce_nav li").eq(x).addClass("xai");
		$(".xq01").hide();
		$(".xq01").eq(x).show();
		
		},function(){
	
			
			
			
			})
	})