<?php

namespace Behaviours\Cigarette;

class NullCigarette extends BaseCigarette
{
	protected function defaultResponse()
	{
		return null;
	}
}
