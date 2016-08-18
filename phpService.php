<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method=="POST"){
  $textToHash = $_POST['text'];
  header("Content-type: application/json");
  echo json_encode(hash('sha256', $textToHash));
} else if($method=="GET"){
  header("Content-type: application/json");
		$json_array = array (
		'Ime' => 'David',
		'Prezime' => 'Komljenovic',
		'Hash' => hash('sha256', 'David Komljenovic')
		);
		echo json_encode($json_array);

}


?>
