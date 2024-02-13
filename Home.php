<?php 
class Product
{
    private $name;
    private $price;
    private $number;
    function __construct($name,$price,$number)
    {
        $this->name=$name;
        $this->price=$price;
        $this->number=$number;
    }
}
class Stock
{
    private array $inStock;
    private array $inStock_number;
    function __construct($inStock,$inStock_number)
    {
        $this->inStock=$inStock;
        $this->inStock_number=$inStock_number;
    }
    function addProduct($stock,$number)
    {
        array_push($inStock,$stock);
        array_push($inStock_number,$number);
    }
    function deleteProduct()
    {

    }
    function inStock()
    {

    }
}

?>