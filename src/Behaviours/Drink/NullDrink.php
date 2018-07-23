<?php

namespace Behaviours\Drink;

class NullDrink extends BaseDrink
{
	protected function defaultResponse()
	{
		return null;
	}
}
