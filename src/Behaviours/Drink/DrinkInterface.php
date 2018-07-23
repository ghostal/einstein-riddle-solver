<?php

namespace Behaviours\Drink;

interface DrinkInterface
{
	public function drinksMilk(): ?bool;

	public function drinksCoffee(): ?bool;

	public function drinksTea(): ?bool;

	public function drinksWater(): ?bool;

	public function drinksBeer(): ?bool;
}