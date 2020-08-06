<?php
/*
 * @Name: bonbast-api
 * @Author: Max Base
 * @Repository: https://github.com/BaseMax/bonbast-api
 * @Date: Jul 15, 2020
 */
include "NetPHP.php";
function bonbast() {
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
	// Filter empty value in array, we can improve code to avoid this...
	$prices=array_filter($prices);
	/* Access value and rates */
	return $prices;
}
