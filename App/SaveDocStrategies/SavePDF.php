<?php
	
	namespace App\SaveDocStrategies;
	use App\SaveDocStrategies\SaveDocInterface;
	
	class SavePDF implements SaveDocInterface
	{
		public function save(string $filename)
		{
			// Реализация алгоритма сохранения документа в формате PDF
			return 'Документ ' . $filename . ' сохранен в формате PDF';
		}
	}