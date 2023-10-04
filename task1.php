<?php

class Product {
    // TODO: Add properties
    public int $id;
    public string $name;
    public float $price;

    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }


    // TODO: Add getFormattedPrice method
    public function getFormattedPrice(){
        return number_format($this->price, 2, ".", "");
    }


    // TODO: Add showDetails method
    public function showDetails(){
        echo "Product Details:\nID: {$this->id}\nName: {$this->name}\nPrice: $".$this->getFormattedPrice();
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();