<?php

namespace Codetheatres\CustomMenu\Plugins;


class Product
{
	
	public function aftergetName(\Magento\Catalog\Model\Product $product, $name)
	{
		$price = $product->getData(key: 'price');
		if($price < 30)
		{
			$name .= " So Cheap";
		}
		else
		{
			$name .= " So Expensive";
		}
		return $name;
	}
}

