<?php
	
	namespace App;
	use App\DiscountStrategies\IDiscountStrategy;
	
	/**
	* Класс для добавления заказа в счет и расчета итоговой
	* стоимости с учетом возможной скидки
	*
	* Расчет скидок делегирован стратегиям IDiscountStrategy
	*/
	class Bill
	{
		/** Хранит заказанные продукты и их цену */
		private array $order = [];
		
		/**
		* Добавить в заказа наименование продукта и цену
		*
		* @var string $productName - наименование продукта
		* @var int $productPrice - цена
		*
		* @return Bill
		*/
		public function addProduct(string $productName, int $productPrice): self
		{
			$this->order[$productName] = $productPrice;
			
			return $this;
		}
		
		/**
		* Получить финальную стоимость заказа с учетом скидки
		*
		* @var IDiscountStrategy $discountStrategy - объект стратегии, который
		* содержит данные о скидке
		*
		* @return float - финальная стоимость с учетом скидки
		*/
		public function getTotalAmount(IDiscountStrategy $discountStrategy): float
		{
			$totalAmount = 0;
			foreach($this->order as $productPrice){
				$totalAmount += $productPrice;
			}
			
			return round($totalAmount * $discountStrategy->getDiscount(), 2);
		}
	}
	
?>