<?php
namespace Ijdb\Controllers;

class Category {
	private $categoriesTable;

	public function __construct(\Hanbit\DatabaseTable $categoriesTable) {
		$this->categoriesTable = $categoriesTable;
	}

	public function edit() {

		if (isset($_GET['id'])) {
			$category = $this->categoriesTable->findById($_GET['id']);
		}

		$title = '카테고리 수정';

		return ['template' => 'editcategory.html.php',
				'title' => $title,
				'variables' => [
					'category' => $category ?? null
				]
		];
	}

	public function saveEdit() {
		$category = $_POST['category'];

		$this->categoriesTable->save($category);

		header('location: /category/list');
	}
}