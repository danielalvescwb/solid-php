<?php

namespace src;

use src\cart;

class Order {

    private $status;
    private $cart;
    private $totalOrder;

    public function __construct()
    {
        $this->status = 'aberto';
        $this->cart = new Cart();
        $this->totalOrder = 0;
    }

    public function getStatus()
    {
        return $this->status;
    }
    
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getCart()
    {
        return $this->cart;
    }

    public function confirmOrder()
    {
        if($this->cart->validateCart()){
            $this->setStatus('confirmado');
            return true;
        }

        return false;
    }
    
}