<?php
	
	namespace App\DiscountStrategies;
	
	class HappyHoursStrategy implements IDiscountStrategy
	{
		public function getDiscount(): float
		{
			// логика расчета скидки
			return 0.9; // скидка 10%
		}
	}
	
?>