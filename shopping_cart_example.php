<?php

class Cart {
    protected $items = array();

    public function addItem(Item $item) {
        $this->items[] = $item;
    }

    public function getSubTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }
    
}

class Item {
    protected $id;
    protected $name;
    protected $type;
    protected $price;
    public function __construct($id,$name,$type,$price) 
  {
     $this->id = $id;
     $this->name = $name;
     $this->type = $type;
     $this->price = $price;
  }

    public function getName() {
        return $this->name;
    }
public function getPrice() {
        return $this->price;
    }
   
}
//$prod1 = new Product(3,"chicken tikka","pizza",250);
$cart = new Cart();
$prod1=new Item(3,"chicken tikka","pizza",250);
$prod2=new Item(5,"chicken fajita","pizza",250);
$prod3=new Item(6,"chicken burger","sides",500);
$cart->addItem($prod1);
$cart->addItem($prod2);
$cart->addItem($prod3);

print_r($cart);
$total=$cart->getSubTotal();


echo "<br>";
echo "Total=$total";




