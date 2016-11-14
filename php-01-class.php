<?php

/*

	PHP Challenge 01

	Create a simple class to represent a shopping basket

	It must support:

	Adding / removal of items
	Querying the total value of the basket
	Anything else you think useful

	(Note: for brevity, products can be represented in a non oo form e.g.
	an assoc array)


*/

class ShoppingBasket {

  private $items = [];

  public function addItem($item) {
    $this->items[] = $item;
  }

  public function removeItem($index) {
    array_splice($this->items, $index, 1);
  }

  public function totalValue() {
    $total = 0;
    foreach ($this->items as $item) {
      $total += $item['value'];
    }
    return $total;
  }

}

$shoppingBasket = new ShoppingBasket;

$shoppingBasket->addItem(array(
  'value' => 9.99
));

$shoppingBasket->addItem(array(
  'value' => 2.99
));

$shoppingBasket->addItem(array(
  'value' => 0.99
));

$shoppingBasket->removeItem(1);

echo $shoppingBasket->totalValue();
echo "\n";
