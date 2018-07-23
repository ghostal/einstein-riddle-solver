<?php

namespace Behaviours\HouseColour;

interface HouseColourInterface
{
	public function livesInTheGreenHouse() : ?bool;

	public function livesInTheWhiteHouse() : ?bool;

	public function livesInTheYellowHouse() : ?bool;

	public function livesInTheRedHouse() : ?bool;

	public function livesInTheBlueHouse() : ?bool;
}