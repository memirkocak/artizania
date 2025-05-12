<?php
namespace MVC\Models;

/** Class Product **/
class Product {

    private $id;
    private $name;
    private $description;
    private $image;
    private $price;
    private $category;

    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getImage() {
        return $this->image;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getCategory() {
        return $this->category;
    }
    public function setCategory($category) {
        $this->category = $category;
    }
    public function setId() {
        $this->id = uniqid();
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function setImage($image) {
        $this->image = $image;
    }
    public function setPrice($price) {
        $this->price = $price;
    }

}
