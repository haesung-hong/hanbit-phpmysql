<?php

$firstName = $_GET['firstname'];
$lastName = $_GET['lastname'];
echo htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '님, 홈페이지 방문을 환영합니다!';

?>