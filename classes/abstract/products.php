<?php

abstract class Products {
    private $products = array();

    public function addProduct($name, $price) {
        $this->products[] = new Product($name, $price);
    }

    public function getProducts() {
        return $this->products;
    }

    public function removeProduct($name) {
        foreach ($this->products as $key => $product) {
            if ($product->getName() == $name) {
                unset($this->products[$key]);
                return true; // product removed successfully
            }
        }
        return false; // product not found
    }
}
?>