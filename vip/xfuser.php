<?php 
//-----------------------请修改以下配置------------------------------------

//防盗链域名，多个用|隔开，如：123.com|abc.com（不会设置防盗链请留空）请阅读使用说明!
define('REFERER_URL', '');//填写实例：define('REFERER_URL', '123.com|abc.com');

//此处设置防盗信息及错误提示
define('ERROR', 'Q2017视频解析已开启防盗！请勿盗用！<a href="http://www.q2017.com" target="_blank">点击进入Q2017官网</a>');

//此处进行用户相关配置

$user = array(

		'uid' => '80000196', //这里填写你的UID信息，请勿留有空格

		'token' => '15058206a1d6cacbad54e789496665c3',//这里填写你的TOKEN信息，请勿留有空格
	
		'hdd' => '4', //视频默认清晰度，1标清，2高清，3超清，4原画，如果没有高清会自动下降一级（请保持默认，无需修改）
		
		'bdyun' => 'BDUSS=gtYnVwd3JCQ0tRWUNWY0s2cmQ2akNhM2FCbFFBYXIyRzZhQTZtNVpZOH44NWxiQVFBQUFBJCQAAAAAAAAAAAEAAABeGQMrY2hlbrG-srzSwgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD9mcls~ZnJbNV
;STOKEN=b7bfbce4478ad51f1350e2c8916d329b10764eaaf9d0da0c3a08020eac1b590d;', //百度云盘cookie,两个参数BDUSS,STOKEN这两个即可， //填写实例：'bdyun' => 'BDUSS=xxxxxx;STOKEN=xxxxxx;'

		'tyyun' => '', //天翼云盘cookie，只需要获取COOKIE_LOGIN_USER参数即可！， //填写实例：'tyyun' => 'COOKIE_LOGIN_USER=xxxxxxx'

		'updata' => '', //无需设置自动!
		
		'title' => 'Q2017视频解析API接口', //用户设置解析页面title名称   //填写实例：'title' => 'XFSUB视频解析API接口',
		
		'tongji' => '', //用户统计代码!
		
		'loading' => 'loading.png', //手机端加载视频等待图片!   //填写实例：'loading' => 'loading.png',  //请把图片存储在loading目录下。

		'ad' => '' //用户设置广告代码,例如:xxx.com/xxx,无需添加http,多个广告请用逗号分开
        )
				
//-----------------------修改区域结束---------------------------------------
 ?>