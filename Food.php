<?php
include_once 'Product.php';

class Food extends Product {
    public function getType() {
        return 'Cibo';
    }
}
?>
