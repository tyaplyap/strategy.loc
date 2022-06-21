<?php
	
	namespace App;
	use App\SaveDocStrategies\SaveDocInterface;
	
	class DocSaver
	{
		/** Путь к файлу, который нужно сохранить */
		private string $filePath;
		
		public function __construct($filePath)
		{
			$this->filePath = $filePath;
		}
		
		/**
		* Метод принимает объект стратегии и вызвает ее
		* метод save, который сохранит документ
		*/
		public function saveMyDoc(SaveDocInterface $saveStrategy)
		{
			return $saveStrategy->save($this->filePath);
		}
	}