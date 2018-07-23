<?php

namespace Behaviours\PetOwnership;

interface PetOwnershipInterface
{
	public function keepsCats() : ?bool;

	public function keepsDogs() : ?bool;

	public function keepsTheHorse() : ?bool;

	public function rearsBirds() : ?bool;

	public function keepsFish() : ?bool;
}