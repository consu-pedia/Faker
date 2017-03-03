<?php

require_once 'src/autoload.php';

$faker = Faker\Factory::create();

var_dump($faker->getProviders());

echo "\n".$faker->productName();

echo "\n".$faker->productDescription();

echo "\n".$faker->productPrice();
echo "\n";

for($i=0;$i<10;$i++)
{
	echo $faker->productName()." ".$faker->productType()." ".$faker->
	productPrice().":-\n";
}
