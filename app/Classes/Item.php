<?php

namespace App\Classes;

class Item
{
	public $id;
	public $quantity;

	function __construct($id, $quantity)
	{
		$this->id = $id;
		$this->quantity = $quantity;
	}

}