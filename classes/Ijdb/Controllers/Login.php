<?php
namespace Ijdb\Controllers;

class Login {

	public function error() {
		return ['template' => 'loginerror.html.php', 'title' => '로그인되지 않았습니다.'];
	}
}
