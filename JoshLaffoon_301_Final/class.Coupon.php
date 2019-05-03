<?php

class Coupon {
    protected $discount;
    protected $first_price;
    protected $new_price;
    
    function __construct($discount, $first_price, $new_price) {
        $this->discount = $discount;
        $this->first_price = $first_price;
        $this->new_price = $new_price;
    }
    
    function applyDiscount() {
        $this->new_price = $this->first_price - ($this->first_price * $this->discount);
        return $this->new_price;
        $this->new_price;
    }
    
    function getNewPrice(){
        return $this->new_price;
    }
    
}
?>