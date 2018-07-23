<?php

namespace Behaviours\Nationality;

interface NationalityInterface
{
	public function isBritish(): ?bool;

	public function isSwedish(): ?bool;

	public function isDanish(): ?bool;

	public function isNorwegian(): ?bool;

	public function isGerman(): ?bool;
}