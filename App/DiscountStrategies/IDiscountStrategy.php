<?php
	
	namespace App\DiscountStrategies;
	
	/**
	* Общий метод для все стратегий расчета скидки
	*
	*/
	interface IDiscountStrategy
	{
		public function getDiscount(): float;
	}
	
?>