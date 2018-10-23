<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=ijdb_sample;charset=utf8', 'ijdb_sample', 'mypassword');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $output = '데이터베이스 접속 성공.';
}
catch (PDOException $e) {
  $output = '데이터베이스 서버에 접속할 수 없습니다: ' . $e->getMessage() . ', 위치: ' .
  $e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/output.html.php';