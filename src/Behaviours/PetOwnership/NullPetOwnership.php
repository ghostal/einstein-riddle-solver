<?php

namespace Behaviours\PetOwnership;

class NullPetOwnership extends BasePetOwnership
{
	protected function defaultResponse()
	{
		return null;
	}
}
