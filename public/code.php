<?php
setcookie("x_code", '');
//将验证码保存到session里，供全局使用
        //将验证码保存到session里，供全局使用
        $nums = "";
        for($i=0;$i<4;$i++){
        //产生随机数并转换成十六进制
        $nums.=dechex(mt_rand(0,15));
        }
        //将验证码写入cookie
        
        setcookie("x_code", $nums, time()+3600,'/');
        //设置验证码长和宽
        $_width = 60;
        $_height = 20;
        //创建一张图片
        $_img = imagecreatetruecolor($_width,$_height);
        //创建一个白色
        $_white = imagecolorallocate($_img,220,250,250);
        //填充背景
        imagefill($_img,0,0,$_white);
        //随机画6条线条
        for($i=0;$i<6;$i++){
        $_rnd_color = imagecolorallocate($_img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
        imageline($_img,mt_rand(0,$_width),mt_rand(0,$_width),mt_rand(0,$_width),mt_rand(0,$_width),$_rnd_color);
        }
        //随机画出雪花
        for($i=0;$i<60;$i++){
        imagestring($_img,1,mt_rand(1,$_width),mt_rand(1,$_height),"*",imagecolorallocate($_img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255)));
        }
        //输出验证码
        for($i=0;$i<strlen($_COOKIE['x_code']);$i++){
        imagestring($_img,mt_rand(6,10),$i*$_width/4+mt_rand(1,10),mt_rand(1,$_height/2),$_COOKIE['x_code'][$i],imagecolorallocate($_img,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200)));
        }
        //输出和销毁
        
        header("Content-Type:image/png");
        imagepng($_img);
        imagedestroy($_img);

?>