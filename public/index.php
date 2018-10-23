<?php
if (!isset($_POST['firstname'])) {
  include '../templates/form.html.php';
}
else {
  $firstName = $_POST['firstname'];
  $lastName = $_POST['lastname'];

  if ($firstName == 'Kevin' && $lastName == 'Yank') {
    $output = '환영합니다, 관리자시군요!';
  }
  else {
    $output = htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
    htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8')
    . '님, 홈페이지 방문을 환영합니다!';
  }

  include '../templates/welcome.html.php';
}