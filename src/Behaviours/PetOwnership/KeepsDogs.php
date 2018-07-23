<?php

namespace Behaviours\PetOwnership;

class KeepsDogs extends BasePetOwnership
{
	public function keepsDogs() : ?bool
	{
		return true;
	}
}