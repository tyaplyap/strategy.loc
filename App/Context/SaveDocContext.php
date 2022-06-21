<?php
	
	namespace App\Context;
	use App\SaveDocStrategies\SaveDocInterface;
	
	/**
	* Класс отвечает за выбор стратегии сохранения документа
	*
	*/
	class SaveDocContext
	{
		private array $saveDocStrategies = [];
		
		public function __construct()
		{
			// Регистрируем все стратегии 
			// Используем строковые идентификаторы для хранения
			// И функции, строящие объект по запросу - "ленивая" загрузка
			$this->saveDocStrategies = [
				'pdf' => fn() => new \App\SaveDocStrategies\SavePDF(),
				'csv' => fn() => new \App\SaveDocStrategies\SaveCSV(),
				'txt' => fn() => new \App\SaveDocStrategies\SaveTXT()
			];
		}
		
		// Получаем объект стратегии по строковому идентификатору
		// Вызываем функцию, которая построит объект
		public function get(string $strategyId): SaveDocInterface
		{
			return $this->saveDocStrategies[$strategyId]();
		}
	}