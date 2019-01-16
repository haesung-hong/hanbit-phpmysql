<?php

function query($pdo, $sql, $parameters = []) {
	$query = $pdo->prepare($sql);
	$query->execute($parameters);
	return $query;
}


function totalJokes($pdo) {
  $query = query($pdo, 'SELECT COUNT(*) FROM `joke`');
  $row = $query->fetch();
  return $row[0];
}



function getJoke($pdo, $id) {
	
	// query() 함수에서 사용할 $parameters 배열 생성
	$parameters = [':id' => $id];


	// query() 함수에서 사용할 $parameters 배열 제공
	$query = query($pdo, 'SELECT * FROM `joke` WHERE `id` = :id', $parameters);

	return $query->fetch();
}


function insertJoke($pdo, $joketext, $authorId) {
	$query = 'INSERT INTO `joke` (`joketext`, `jokedate`, `authorId`) 
			  VALUES (:joketext, CURDATE(), :authorId)';

	$parameters = [':joketext' => $joketext, ':authorId' => $authorId];

	query($pdo, $query, $parameters);
}


function updateJoke($pdo, $jokeId, $joketext, $authorId) {
  $parameters = [':joketext' => $joketext, ':authorId' => $authorId, ':id' => $jokeId];

  query($pdo, 'UPDATE `joke` SET `authorId` = :authorId, `joketext` = :joketext WHERE `id` = :id', $parameters);
}