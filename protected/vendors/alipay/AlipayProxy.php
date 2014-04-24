<?php


class AlipayProxy extends CComponent
{
    private $_input_charset = "utf-8";
    private $sign_type = "MD5";
    private $transport = "https";

    public $key = "";
    public $partner = "";
    public $seller_email = "";
    public $return_url = "";
    public $notify_url = "";
    public $show_url = "";

    public function init()
    {
        Yii::import('application.vendors.alipay.class.*');
    }

    public function buildForm($request)
    {
        $params = array(
            'partner'=>$this->partner,
            'seller_email'=>$this->seller_email,
            'return_url'=>$this->return_url,
            'notify_url'=>$this->notify_url,
            '_input_charset'=>$this->_input_charset,
            'show_url'=>$this->show_url,
        );
        $params = array_merge($params, $request->getParams());
        $service = new AlipayService($params, $this->key, $this->sign_type);
        return $service->build_form();
    }

    public function verifyNotify()
    {
        $notify = new AlipayNotify($this->partner, $this->key, $this->sign_type, $this->_input_charset, $this->transport);
        return $notify->notify_verify();
    }

    public function verifyReturn()
    {
        $notify = new AlipayNotify($this->partner, $this->key, $this->sign_type, $this->_input_charset, $this->transport);
        return $notify->return_verify();
    }

    
}

