yii-alipay
==========

针对Yii框架的支付宝接口扩展教程


唯一的难点,也是最最容易被忽略的地方是:

1. actionNotifyAlipay返回时访问权限不够,无法成功.

2. actionReturnAlipay返回时url上不能带任何参数,包括yii入口文件index.php?***这些.

3. 交易成功后,一定要做判断,在执行actionNotifyAlipay的程序逻辑成功后,要在执行actionReturnAlipay时避免.
