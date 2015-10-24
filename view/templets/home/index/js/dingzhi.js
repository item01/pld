
$(function(){
	$(".chanpin01 .zhishi li").hover(function(){
		/*var x=$(".zhishi li").index(this);*/
		var x=$(this).index();
		$(this).parent(".zhishi").siblings(".tu_ji").children("li").css("display","none");
		$(this).parent(".zhishi").siblings(".tu_ji").children("li").eq(x).css("display","block");
		},function(){
			
			
			
			})
	})