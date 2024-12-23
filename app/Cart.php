<?php

namespace App;
use App\Product;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id){
  		$giohang = ['qty'=>0, 'price' => $item->unit_or_promotion_price, 'unit_price' => $item->unit_price, 'promotion_price' => $item->promotion_price, 'item' => $item];
 		if($this->items){
   			if(array_key_exists($id, $this->items)){
    		$giohang = $this->items[$id];
   			}
  		}
  		$giohang['qty']++;
 		if($item->promotion_price == 0) {
  			$item->unit_or_promotion_price = $item->unit_price;
  		}
  		else {
   			$item->unit_or_promotion_price = $item->promotion_price;
  		}
  		$giohang['price'] = $item->unit_or_promotion_price * $giohang['qty'];
  		$this->items[$id] = $giohang;
  		$this->totalQty++;
  		$this->totalPrice += $item->unit_or_promotion_price;
 }
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}

	public function UpdateItem($id, $qty){
		//xóa cũ
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		//nhập mới
		$this->items[$id]['qty'] = $qty;
		if($this->items[$id]['promotion_price']==0){
			$this->items[$id]['price'] = $qty * $this->items[$id]['unit_price'];
		}
		else{
			$this->items[$id]['price'] = $qty * $this->items[$id]['promotion_price'];
		}
		//cập nhật
		$this->totalQty += $this->items[$id]['qty'];
		$this->totalPrice += $this->items[$id]['price'];
	}
}
