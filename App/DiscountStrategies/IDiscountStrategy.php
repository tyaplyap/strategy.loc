<?php
	
	namespace App\DiscountStrategies;
	
	interface IDiscountStrategy
	{
		public function getDiscount(): float;
	}
	
?>