<?php

// # Attributi della
abstract class Product {
    protected $title;
    protected $price;
    protected $category;
    protected $image;

    public function __construct($title, $price, Category $category, $image) {
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }






    // Getter e Setter
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory(Category $category) {
        $this->category = $category;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    abstract public function getType();
}
?>
