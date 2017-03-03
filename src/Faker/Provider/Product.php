<?php

namespace Faker\Provider;

class Product extends Base
{
    public function productName()
    {
        //$pName = static::randomElement(static::$productNames);
        //return $pName;
        $nameDb = file("Livsmedelsnamn.txt");
        $randomLine = $nameDb[array_rand($nameDb)];
        return $randomLine;
    }

    public function productType()
    {
        $pType = static::randomElement(static::$productTypes);
        return $pType;
    }

    public function productDescription()
    {
    	$pDesc = $this->generator->realText(200, 1);
    	return $pDesc;
    }

    public function productPrice()
    {
    	$pPrice = static::numberBetween(0, 10000);
    	return $pPrice;
    }
}
