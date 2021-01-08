<?php

use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends TestCase 
{
    public function testConstructor()
    {
        $item = new Item();
        $this->assertEquals('',$item->getDescription());
        $this->assertEquals(0,$item->getValue());
    }
    /**
     * @dataProvider dataProvider
     */
    public function testGetAndSetDescription($value,$description)
    {
        $item = new Item();
        $item->setDescription($description);
        $this->assertEquals($description,$item->getDescription());
    }
    /**
     * @dataProvider dataProvider
     */
    public function testGetAndSetValue($value,$description)
    {
        $item = new Item();
        $item->setValue($value);
        $this->assertEquals($value,$item->getValue());
    }
    public function dataProvider(){
        return[
            [3500.00, "TV 29''"],
            [650.00, "Microondas"],
            [160.00, "Liquidificador"],
            [-50,"Error"],
            [0,"Error"]
        ];
    }
}
