<?php
    class Produto{
        public $id;
        public $name;
        public $description;
        public $price;
        public $available;
        public $image;

        function __construct($id, $name, $description, $price, $available, $image)
        {
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->available = $available;
            $this->image = $image;
        }
    }
?>