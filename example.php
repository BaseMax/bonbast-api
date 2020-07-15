<?php
// Max Base
// https://github.com/BaseMax/bonbast-api
include "source/bonbast-api.php";

$prices=bonbast();
// Display output
print_r($prices);
// Display JSON
print json_encode($prices)."\n";
