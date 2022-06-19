<?php
	
	namespace App\DiscountStrategies;
	
	class HappyBirthdayStrategy implements IDiscountStrategy
	{
		public function getDiscount(): float
		{
			// логика расчета скидки
			return 0.75; // скидка 25%
		}
	}
	
?>