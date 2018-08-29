<?php

namespace App\Classes;
use Illuminate\Database\Eloquent\Model;
use App\Classes\Item;


class ShoppingCart
{
    public $shoppingcart;
    public $items = [];
    public $session;

	function __construct($request){

        $this->session = $request->session();
        $this->items = $this->session->get('shoppingcart');
    }

    //adds an item to the shoppingcart
    //if the item you want to add already exists it updates the quantity
    public function add($request, $id, $quantity){

        if ($this->getItem($id)) {
            $item = $this->getItem($id);
            $item->quantity = $item->quantity + $quantity;
        } else {
            $item = new item($id, $quantity);
            $this->items[] = $item;
        } 

        $this->session->put('shoppingcart', $this->items);   
	}

    //edits the quantity of an item
    public function edit($request, $id, $quantity){

        $item = $this->getItem($id);
        $item->quantity = $quantity;
        
        $this->session->put('shoppingcart', $this->items);   
    }

    //deletes an item
    //finds the array key of an item using array_search()
    //delete item from array using unset()
    public function delete($request, $id){    

        $item = $this->getItem($id);
        $key = array_search($item, $this->items);
        unset($this->items[$key]);
        
        $this->session->put('shoppingcart', $this->items);   
    }
    
    //loops through items array to find item with corresponding id
    public function getItem($id){

        if (isset($this->items)) {
            foreach ($this->items as $item) {
                if ($item->id == $id) {
                    return $item;
                }
            }
        }
    }

    public function getAllItems(){

        if (!empty($this->items)) {
            return $this->items;
        }
    }

    public function emptyCart(){

        $this->session->pull('shoppingcart');
    }
}