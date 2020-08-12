<?php
/*
 * @Name: bonbast-api
 * @Author: Max Base
 * @Repository: https://github.com/BaseMax/bonbast-api
 * @Date: Jul 15, 2020, 2020-08-07
 */
include "NetPHP.php";
function bonbast() {
	// Get from webpage
	$res=get("https://www.bonbast.com/");
	$result=[];
	$regex='/<td>(<img class="gold-logo" style=\"([^\"]+)\" alt=\"(?<alt>[^\"]+)\"([^\>]+)>(<span style="font-size:18px;">(?<gold_prefix>[^\<]+)<\/span>|)|)(?<name>[^\<]+)<\/td><td([^\>]+|)>(?<value1>[^\<]+)<\/td><td([^\>]+|)>(?<value2>[^\<]+)<\/td>/i';
	preg_match_all($regex, $res[0], $_prices);
	// print_r($_prices);
	$prices[]=[];
	foreach($_prices["name"] as $i=>$name) {
		// if(trim($_prices[6][$i]) == "") { continue; }
		$prefix=html_entity_decode($_prices["gold_prefix"][$i]);
		if($prefix!=="") { $name=$prefix.$name; }
                if($name==="Code" || $name==="Gold Coins"){ continue; }
		// Remove ',' from values
		$_prices["value1"][$i]=str_replace(",", "", $_prices["value1"][$i]);
		$_prices["value2"][$i]=str_replace(",", "", $_prices["value2"][$i]);
		$prices[$name]=["buy"=>$_prices["value1"][$i],"sell"=>$_prices["value2"][$i]];
	}
	// Filter empty value in array, we can improve code to avoid this...
	$prices=array_filter($prices);
	/* Access value and rates */
	return $prices;
}
