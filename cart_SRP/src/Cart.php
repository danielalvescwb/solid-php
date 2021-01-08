<?php

namespace src;

use src\Item;

class Cart {
    
    private $itens;

    public function __construct() {
        $this->itens = [];
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function addItem(Item $item)
    {
        array_push($this->itens,$item);
        return true;
    }

    public function validateCart()
    {
        return count($this->itens);
    }

}