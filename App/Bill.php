<?php
	
	namespace App;
	use App\DiscountStrategies\IDiscountStrategy;
	
	class Bill
	{
		public array $order = [];
		
		public function addProduct(string $priductName, int $productPrice)
		{
			$this->order[$priductName] = $productPrice;
			
			return $this;
		}
		
		public function getTotalAmount(IDiscountStrategy $discountStrategy): int
		{
			$totalAmount = 0;
			foreach($this->order as $productPrice){
				$totalAmount += $productPrice;
			}
			
			return $totalAmount * $discountStrategy->getDiscount();
		}
	}
	
?>