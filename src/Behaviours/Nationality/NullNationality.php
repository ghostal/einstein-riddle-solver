<?php

namespace Behaviours\Nationality;

class NullNationality extends BaseNationality
{
	protected function defaultResponse()
	{
		return null;
	}
}