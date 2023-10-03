<?php


class Category
{
    public $category_id;
    public $category_name;

    public function __construct($category_id, $category_name)
    {
        $this->category_id = (int) $category_id;
        $this->category_name = $category_name;
    }

    public function category_show()
    {
        return [
            "Category id:" => $this->category_id,
            'name :' => $this->category_name,
        ];
    }
}


class Product extends Category
{
    public $product_id;
    public $product_name;

    public function __construct($product_id, $product_name, $category_id, $category_name){
        $this->product_id = (int) $product_id;
        $this->product_name = $product_name;
        $this->category_id = (int) $category_id;
        $this->category_name = $category_name;
    }


    public function product_show()
    {
        return [
            "Product id:" => $this->product_id,
            'Product name:' => $this->product_name,
        ];
    }
}

$product = new Product(1, 'new post', 3, 'new category');

var_dump($product->category_show());

// var_dump($product->product_show());
