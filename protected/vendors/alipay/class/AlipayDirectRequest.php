<?php
class AlipayDirectRequest
{
    private $service = "create_direct_pay_by_user";
    private $payment_type = "1";

    public $out_trade_no = "";
    public $subject = "";
    public $body = "";
    public $total_fee = 0;

    // OPTIONAL PROPERTIES
    public $paymethod;
    public $defaultbank;
    public $anti_phishing_key;
    public $exter_invoke_ip;
    public $buyer_email;
    public $extra_common_param;
    public $royalty_type;
    public $royalty_parameters;

    public function getParams() {
        return array(
            'service'=>$this->service,
            'payment_type'=>$this->payment_type,
            'out_trade_no'=>$this->out_trade_no,
            'subject'=>$this->subject,
            'body'=>$this->body,
            'total_fee'=>$this->total_fee,
            'paymethod'=>$this->paymethod,
            'defaultbank'=>$this->defaultbank,
            'anti_phishing_key'=>$this->anti_phishing_key,
            'exter_invoke_ip'=>$this->exter_invoke_ip,
            'buyer_email'=>$this->buyer_email,
            'extra_common_param'=>$this->extra_common_param,
            'royalty_type'=>$this->royalty_type,
            'royalty_parameters'=>$this->royalty_parameters,
        );
    }
}