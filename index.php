<?php
	
	/** Фронт-контроллер */
	
	spl_autoload_register(function (string $className){
		require_once __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
	});
	
	/**
	* Создаем счет Bill, добавляем в счет: кофе за 100, десерт за 200
	* Получаем итоговую сумму счета с учетом скидки HappyHours
	*/
	echo  (new \App\Bill())
			->addProduct('Cofee', 100)
			->addProduct('dessert', 200)
				->getTotalAmount(
					(new \App\Context\DiscountContext())
						->getById('HappyHours')
				); // 270
	
	
?>