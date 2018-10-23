<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=ijdb_sample', 'ijdb_sample', 'mypassword');
  $output = '데이터베이스 접속 성공.';
}
catch (PDOException $e) {
  $output = '데이터베이스 서버에 접속할 수 없습니다: ' . $e;
}

include  __DIR__ . '/../templates/output.html.php';