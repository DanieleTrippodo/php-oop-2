<?php
include_once 'Product.php';

class Toy extends Product {
    public function getType() {
        return 'Gioco';
    }
}
?>
