<?php
// Max Base
// https://github.com/BaseMax/bonbast-api
include "NetPHP.php";

// Get from webpage
$res=get("https://www.bonbast.com/");
$result=[];
preg_match_all('/<td>([^\<]+)<\/td><td([^\>]+|)>(?<value1>[^\<]+)<\/td><td([^\>]+|)>(?<value2>[^\<]+)<\/td>/i', $res[0], $_prices);
// print_r($_prices);
$prices[]=[];
foreach($_prices[1] as $i=>$name) {
	if(trim($_prices[2][$i]) == "") {
		continue;
	}
	$prices[$name]=["buy"=>$_prices["value1"][$i],"sell"=>$_prices["value2"][$i]];
}

// Display output
$prices=array_filter($prices);
print_r($prices);
// access value and rate...
