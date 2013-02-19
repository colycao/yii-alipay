<?php
/*
sadsadsaaaaaaaaa
sadsa
sdsd
asdsadsdsdsd
sdsdsdsdsdsdfdfgvbxcvb
*/
  'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
            'class'=>'WebUser',
			'allowAutoLogin'=>true,
            'loginUrl'=>array('path/login'),
		),
        'alipay'=>array(
            'class'=>'application.vendors.alipay.AlipayProxy',
            'partner'=>'2088801162173***', // your partner id
            'key'=>'***om2l8gxuvca9gtniqbextf4y66***', // your key
            'seller_email'=>'da***.li@***.com',
            'return_url'=>'http://www.***.com/foo/returnAlipay',  
            'notify_url'=>'http://www.***.com/f00/notifyAlipay',  //注意设置权限为Alipay可返回数据
            'show_url'=>'http://www.yeedt.com/',
        ),
        /*sfddsfdsf
        sdfdsfdsfsdfsdfsdfsdfds
        */
   ),
?>
