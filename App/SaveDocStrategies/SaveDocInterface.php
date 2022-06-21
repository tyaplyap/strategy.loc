<?php
	
	namespace App\SaveDocStrategies;
	
	interface SaveDocInterface
	{
		public function save(string $filename);
	}