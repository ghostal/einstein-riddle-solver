<?php

namespace Behaviours\PetOwnership;

abstract class BasePetOwnership implements PetOwnershipInterface
{
	protected function defaultResponse()
	{
		return false;
	}

	public function keepsCats() : ?bool
	{
		return $this->defaultResponse();
	}

	public function keepsDogs() : ?bool
	{
		return $this->defaultResponse();
	}

	public function keepsTheHorse() : ?bool
	{
		return $this->defaultResponse();
	}

	public function rearsBirds() : ?bool
	{
		return $this->defaultResponse();
	}

	public function keepsFish() : ?bool
	{
		return $this->defaultResponse();
	}
}
