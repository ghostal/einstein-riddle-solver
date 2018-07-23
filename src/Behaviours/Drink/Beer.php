<?php

namespace Behaviours\Drink;

class Beer extends BaseDrink
{
	public function drinksBeer() : ?bool
	{
		return true;
	}
}
