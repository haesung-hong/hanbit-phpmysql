<?php

$title = '인터넷 유머 데이터베이스';

ob_start();

include  __DIR__ . '/../templates/home.html.php';

$output = ob_get_clean();

include  __DIR__ . '/../templates/layout.html.php';