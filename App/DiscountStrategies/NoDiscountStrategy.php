<?php
	
	namespace App\DiscountStrategies;
	
	class NoDiscountStrategy implements IDiscountStrategy
	{
		public function getDiscount(): float
		{
			// логика расчета скидки
			return 1; // скидок нет
		}
	}
	
	
?>