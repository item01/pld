$(function(){
	$(".yiji").toggle(function(){
		$(this).siblings(".erji").slideUp(400);
		$(this).children("div").css("backgroundImage","url(images/shang.png)");
		},function(){
		$(this).siblings(".erji").slideDown(400);	
		$(this).children("div").css("backgroundImage","url(images/xia01.png)");	
			})
	})
$(function(){
	$(".shijing li").hover(function(){
		var x=$(".shijing li").index(this);
		$(".shijing li").removeClass("cu_li");
		$(".shijing li").eq(x).addClass("cu_li");
		$(".tuji li").hide();
		$(".tuji li").eq(x).show();
		})
	
	
	
	
	})	