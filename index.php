<?php

require_once __DIR__."/classes/User.php";

$product = new User("fulvio", "gaudenzi", 27, "3349454749", new Card("fulvio gaudenzi","11/08/1994", 234 , 333537368));

var_dump($product->getCard());
?>