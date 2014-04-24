<?php
class AlipayGuaranteeRequest
{
    private $service = "create_partner_trade_by_buyer";
    private $payment_type = "1";

    public $out_trade_no = "";
    public $subject = "";
    public $body = "";
    public $price = 0;
    public $quantity = 0;

    public $logistics_fee = 0;
    public $logistics_type = 0;
    public $logistics_payment = 0;

    // OPTIONAL PROPERTIES
    public $receive_name;
    public $receive_address;
    public $receive_zip;
    public $receive_phone;
    public $receive_mobile;
    public $logistics_fee_1;
    public $logistics_type_1;
    public $logistics_payment_1;
    public $logistics_fee_2;
    public $logistics_type_2;
    public $logistics_payment_2;
    public $discount;
    public $buyer_email;

    public function getParams() {
        return array(
            'service'=>$this->service,
            'payment_type'=>$this->payment_type,
            'out_trade_no'=>$this->out_trade_no,
            'subject'=>$this->subject,
            'body'=>$this->body,
            'price'=>$this->price,
            'quantity'=>$this->quantity,
            'logistics_fee'=>$this->logistics_fee,
            'logistics_type'=>$this->logistics_type,
            'logistics_payment'=>$this->logistics_payment,

            'receive_name'=>$this->receive_name,
            'receive_address'=>$this->receive_address,
            'receive_zip'=>$this->receive_zip,
            'receive_phone'=>$this->receive_phone,
            'receive_mobile'=>$this->receive_mobile,
            'logistics_fee_1'=>$this->logistics_fee_1,
            'logistics_type_1'=>$this->logistics_type_1,
            'logistics_payment_1'=>$this->logistics_payment_1,
            'logistics_fee_2'=>$this->logistics_fee_2,
            'logistics_type_2'=>$this->logistics_type_2,
            'logistics_payment_2'=>$this->logistics_payment_2,
            'discount'=>$this->discount,
            'buyer_email'=>$this->buyer_email,
        );
    }
}