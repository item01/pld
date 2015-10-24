$(function(){
	$(".shouji li").click(function(){
		var x=$(".shouji li").index(this);
		$(".shouji li").removeClass("sanjiao");
		$(".shouji li").eq(x).addClass("sanjiao");
		$(".shuru01").hide();
		$(".shuru01").eq(x).show();
		
	})
	
	})
$(function(){
	$(".weiti").toggle(function(){
		$(this).siblings(".huida").show();
		$(this).css("backgroundImage","url(images/zhankai02.png)");
		},function(){
		$(this).siblings(".huida").hide();
		$(this).css("backgroundImage","url(images/zhankai01.png)");	
			
			})
	})	
$(function(){
	$(".qing li").click(function(){
		var x=$(".qing li").index(this);
		$(".qing li").removeClass("chogn");
		$(".qing li").eq(x).addClass("chogn");
		$(".dizhi li").fadeOut(500);
		$(".dizhi li").eq(x).fadeIn(500);
		
	})
	
	})	
$(function(){
	$(".vip02 .gouwu").hover(function(){
		$(this).siblings(".jairu").show();
		$(".vip03 .me").hide();
		},function(){
		
			})
	})
$(function(){
	$(".me").hover(function(){
		
		},function(){
		$(this).hide();
			})
	})
	$(function(){
	$(".jairu").hover(function(){
		
		},function(){
		$(this).hide();
			})
	})
$(function(){
	$(".vip03 .gouwu").hover(function(){
		$(this).siblings(".me").show();
		$(".vip02 .jairu").hide();
		},function(){
		
			})
	})
	
$(function(){
	$(".jiben li").click(function(){
		var x=$(".jiben li").index(this);
		$(".jiben li").removeClass("cur_jiben");
		$(".jiben li").eq(x).addClass("cur_jiben");
		$(".zhans01").hide();
		$(".zhans01").eq(x).show();
		
	})
	
	})	
$(function(){
	$(".qita_right").toggle(function(){
		$(".zhankai").slideUp(500);
		$(this).children(".shouqi01").hide();
		$(this).children(".shouqi02").show();
		},function(){
		$(".zhankai").slideDown(500);
		$(this).children(".shouqi01").show();
		$(this).children(".shouqi02").hide();
			})
	})	
$(function(){
	$(".shou01").hover(function(){
		$(this).children(".laji").show();
		},function(){
		$(this).children(".laji").hide();	
			
			
			})
	})	

$(function(){
	$(".huoqu li").click(function(){
		var x=$(".huoqu li").index(this);
		$(".huoqu li").removeClass("cur_huoqu");
		$(".huoqu li").eq(x).addClass("cur_huoqu");
		$(".shijian").hide();
		$(".shijian").eq(x).show();
		
	})
	
	})	

$(function(){
	$(".jfgz li").click(function(){
		var x=$(".jfgz li").index(this);
		$(".jfgz li").removeClass("dixian");
		$(".jfgz li").eq(x).addClass("dixian");
		$(".gz01").hide();
		$(".gz01").eq(x).show();
		
	})
	
	})	
$(function(){
	$(".ffff option").click(function(){
		var x=$(".ffff option").index(this);
		$(".yyy01").hide();
		$(".yyy01").eq(x).show();
		
	})
	
	})	