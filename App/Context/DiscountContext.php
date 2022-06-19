<?php
	
	namespace App\Context;
	use App\DiscountStrategies\IDiscountStrategy;
	
	/**
	* Класс контекста - отвечает за выбор конкретной стратегии
	* расчета скидки. 
	*
	*/
	class DiscountContext
	{	
		/**
		* Создает и возвращает стратегию для расчета скидки
		*
		* @var string $strategyId - строковый идентификатор стратегии
		*
		* @return IDiscountStrategy - объект класса, имплементируюего 
		* интерфейс IDiscountStrategy
		*/
		public function getById(string $strategyId): IDiscountStrategy
		{
			switch($strategyId){
				case 'HappyHours':
					return new \App\DiscountStrategies\HappyHoursStrategy();
					break;
				case 'HappyBirthday':
					return new \App\DiscountStrategies\HappyBirthdayStrategy();
				case 'NoDiscount':
					return new \App\DiscountStrategies\NoDiscountStrategy();
					break;
				default:
					return new \App\DiscountStrategies\NoDiscountStrategy();
					break;
			}
		}
	}
	
?>