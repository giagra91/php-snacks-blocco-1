<?php 
/**
 * Partendo da questa stringa $string = "c,i,n,q,u,e"; 
 * trasforma la stringa in un array con un elemento per carattere,

 * 	$array = ['c','i','n','q','u','e'];

 * infine crea un array associativo della forma:
	
 * 	$result = [
 * 		'c' => 'c',
 * 		'i' => 'i',
 * 		'n' => 'n',
 * 		'q' => 'q',
 * 		'u' => 'u',
 * 		'e' => 'e'
 * 	];
 */
    $string = "c,i,n,q,u,e";
    $newArray = explode(",", $string);
    $result = [];
    foreach($newArray as $key => $element){
        $result[$element] = $element;
    };
    var_dump($result);
?>