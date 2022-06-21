<?php
	
	namespace App\SaveDocStrategies;
	use App\SaveDocStrategies\SaveDocInterface;
	
	class SaveCSV implements SaveDocInterface
	{
		public function save(string $filename)
		{
			// Реализация алгоритма сохранения документа в формате CSV
			return 'Документ ' . $filename . ' сохранен в формате CSV';
		}
	}