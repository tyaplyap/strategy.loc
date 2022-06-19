<?php
	
	namespace App\Context;
	use App\DiscountStrategies\IDiscountStrategy;
	
	/**
	* Класс контекста - отвечает за выбор конкретной стратегии
	* расчета скидки. 
	*
	* Здесь же регистрируются новые стратегии или удаляются
	*/
	class DiscountContext
	{	
		/**
		* Создает и возвращает стратегию для расчета скидки
		*
		* @var string $strategyId - строковый идентификатор стратегии
		* @return IDiscountStrategy - объект стратегии
		*/
		public function getById(string $strategyId): IDiscountStrategy
		{
			// Регистрация новых страгеий и диспетчеризация
			switch($strategyId){
				case 'HappyHours':
					return new \App\DiscountStrategies\HappyHoursStrategy();
				case 'HappyBirthday':
					return new \App\DiscountStrategies\HappyBirthdayStrategy();
				default:
					return new \App\DiscountStrategies\NoDiscountStrategy();
			}
		}
	}
	
?>