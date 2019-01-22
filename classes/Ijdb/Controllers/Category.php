<?php
namespace Ijdb\Controllers;

class Category {
	private $categoriesTable;

	public function __construct(\Hanbit\DatabaseTable $categoriesTable) {
		$this->categoriesTable = $categoriesTable;
	}
}