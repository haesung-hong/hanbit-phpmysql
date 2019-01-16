<?php
namespace Ijdb\Controllers;
use \Hanbit\DatabaseTable;

class Register {
	private $authorsTable;

	public function __construct(DatabaseTable $authorsTable) {
		$this->authorsTable = $authorsTable;
	}

	public function registrationForm() {
		return ['template' => 'register.html.php', 
				'title' => '사용자 등록'];
	}


	public function success() {
		return ['template' => 'registersuccess.html.php', 
			'title' => '등록 성공'];
	}

	public function registerUser() {
		$author = $_POST['author'];

		$this->authorsTable->save($author);

		header('Location: /author/success');
	}
}