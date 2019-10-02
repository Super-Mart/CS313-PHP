<?php

class Product
{

    public $productArray = array(
        "S10" => array(
            'id' => '1',
            'name' => 'Samsung Galaxy S10',
            'code' => 'S10',
            'image' => 'product-images/samsungs10.png',
            'price' => '949.00'
        ),
        "7PRO" => array(
            'id' => '2',
            'name' => 'OnePlus 7 Pro',
            'code' => '7PRO',
            'image' => 'product-images/oneplus.jpg',
            'price' => '669.00'
        ),
        "X" => array(
            'id' => '3',
            'name' => 'iPhone X',
            'code' => 'X',
            'image' => 'product-images/iphonex.jpg',
            'price' => '649.00'
        )
    );

    public function getAllProduct()
    {
        return $this->productArray;
    }
}
