<?php

namespace Behaviours\Nationality;

abstract class BaseNationality implements NationalityInterface
{
	protected function defaultResponse()
	{
		return false;
	}

	public function isBritish() : ?bool
	{
		return $this->defaultResponse();
	}

	public function isSwedish() : ?bool
	{
		return $this->defaultResponse();
	}

	public function isDanish() : ?bool
	{
		return $this->defaultResponse();
	}

	public function isNorwegian() : ?bool
	{
		return $this->defaultResponse();
	}

	public function isGerman() : ?bool
	{
		return $this->defaultResponse();
	}
}