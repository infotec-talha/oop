<?php

class Cart {
    public $items = array();

    public function addItem(Item $item) {
        $this->items[$item->id] = $item;
    }

    public function getSubTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }
    public function deleteItem(Item $item) {

		// Need the unique item id:
		$id = $item->getId();
                unset($this->items[$id]);
    }
}

class Item {
    public $id;
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

   
public function getPrice() {
        return $this->price;
    }
public function getId()	{
		return $this->id;
	}
   
}

//$prod1 = new Product(3,"chicken tikka","pizza",250);
$cart = new Cart();
$prod1=new Item(3,"chicken tikka","pizza",250);
$prod2=new Item(5,"chicken fajita","pizza",250);
$prod3=new Item(6,"chicken burger","sides",500);
$prod4=new Item(8,"chicken fried rice","rice",500);
$cart->addItem($prod1);
$cart->addItem($prod2);
$cart->addItem($prod3);
$cart->addItem($prod4);
$cart->deleteItem($prod3);
echo '<pre>';

//unset($products);
//print_r($products);
//unset($cart->items[1]);
print_r($cart->items);
$total=$cart->getSubTotal();
echo "<br>";
echo "Total=$total";




