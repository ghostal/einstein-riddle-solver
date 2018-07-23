<?php

namespace Behaviours\PetOwnership;

class KeepsCats extends BasePetOwnership
{
	public function keepsCats() : ?bool
	{
		return true;
	}
}