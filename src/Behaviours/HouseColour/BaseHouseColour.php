<?php

namespace Behaviours\HouseColour;

abstract class BaseHouseColour implements HouseColourInterface
{
	protected function defaultResponse()
	{
		return false;
	}

	public function livesInTheGreenHouse() : ?bool
	{
		return $this->defaultResponse();
	}

	public function livesInTheWhiteHouse() : ?bool
	{
		return $this->defaultResponse();
	}

	public function livesInTheYellowHouse() : ?bool
	{
		return $this->defaultResponse();
	}

	public function livesInTheRedHouse() : ?bool
	{
		return $this->defaultResponse();
	}

	public function livesInTheBlueHouse() : ?bool
	{
		return $this->defaultResponse();
	}
}