<?php
include_once 'Product.php';

class Accessory extends Product {
    public function getType() {
        return 'Accessorio';
    }
}
?>
