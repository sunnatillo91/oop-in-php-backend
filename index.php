<?php


class Category
{
    public $category_id;
    // public $category;
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
        // if (Category::$category) {
        // } return true;
    }


    public function create_category($category_id, $category_name)
    {
        $this->category_id = 'category_id = ' . $category_id . ', category_name = ' . $this->category_name = $category_name;
    }
}

$category = new Category(3, 'new category');
// $category->create_category(3, 'new category');
// $category->category_show();
var_dump($category);

// $category->category_name = 'new category name';


class Product extends Category
{
    public $product_id;
    public $product_name;

    // public function __construct($product_id, $product_name){
    //     $this->product_id = (int) $product_id;
    //     $this->product_name = $product_name;
    // }

    public function create_product($product_id, $product_name)
    {

        $this->product_id = (int) $product_id;
        $this->product_name = $product_name;
    }

    // public function category_show()
    // {
    //     return $this->create_category(1, ' new category_name');
    // }
}

$product = new Product(1, 'new post');
// $product->create_product(2, 'new product');
$product->category_show();

// var_dump($product);
