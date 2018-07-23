<?php

namespace Behaviours\Cigarette;

abstract class BaseCigarette implements CigaretteInterface
{
	protected function defaultResponse()
	{
		return false;
	}

	public function smokesDunhill() : ?bool
	{
		return $this->defaultResponse();
	}

	public function smokesPallMall() : ?bool
	{
		return $this->defaultResponse();
	}

	public function smokesPrince() : ?bool
	{
		return $this->defaultResponse();
	}

	public function smokesBluemasters() : ?bool
	{
		return $this->defaultResponse();
	}

	public function smokesBlends() : ?bool
	{
		return $this->defaultResponse();
	}
}
