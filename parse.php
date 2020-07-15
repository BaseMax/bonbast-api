<?php
// Max Base
// https://github.com/BaseMax/bonbast-api
include "NetPHP.php";
$res=get("https://www.bonbast.com/");
$result=[];
if(preg_match('/<td>US Dollar<\/td><td([^\>]+|)>(?<value1>[^\<]+)<\/td><td([^\>]+|)>(?<value2>[^\<]+)<\/td>/i', $res[0], $usd)) {
	$result["usd"]=[$usd["value1"], $usd["value2"]];
}
if(preg_match('/<td>Euro<\/td><td([^\>]+|)>(?<value1>[^\<]+)<\/td><td([^\>]+|)>(?<value2>[^\<]+)<\/td>/i', $res[0], $euro)) {
	$result["euro"]=[$euro["value1"], $euro["value2"]];
}
// ...

// Display output
print "Buy Euro: ".$result["euro"][0]."\n";
print "Sell Euro: ".$result["euro"][0]."\n";
print "Buy Dollar: ".$result["usd"][0]."\n";
print "Sell Dollar: ".$result["usd"][0]."\n";
