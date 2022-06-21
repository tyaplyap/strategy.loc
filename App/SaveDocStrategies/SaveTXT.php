<?php
	
	namespace App\SaveDocStrategies;
	use App\SaveDocStrategies\SaveDocInterface;
	
	class SaveTXT implements SaveDocInterface
	{
		public function save(string $filename)
		{
			// Реализация алгоритма сохранения документа в формате TXT
			return 'Документ ' . $filename . ' сохранен в формате TXT';
		}
	}