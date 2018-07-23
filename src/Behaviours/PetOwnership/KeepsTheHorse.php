<?php

namespace Behaviours\PetOwnership;

class KeepsTheHorse extends BasePetOwnership
{
	public function keepsTheHorse() : ?bool
	{
		return true;
	}
}