<?php

namespace Behaviours\Drink;

abstract class BaseDrink implements DrinkInterface
{
	protected function defaultResponse()
	{
		return false;
	}

	public function drinksMilk() : ?bool
	{
		return $this->defaultResponse();
	}

	public function drinksCoffee() : ?bool
	{
		return $this->defaultResponse();
	}

	public function drinksTea() : ?bool
	{
		return $this->defaultResponse();
	}

	public function drinksWater() : ?bool
	{
		return $this->defaultResponse();
	}

	public function drinksBeer() : ?bool
	{
		return $this->defaultResponse();
	}
}