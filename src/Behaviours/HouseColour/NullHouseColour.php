<?php

namespace Behaviours\HouseColour;

class NullHouseColour extends BaseHouseColour
{
	protected function defaultResponse()
	{
		return null;
	}
}