<?php

namespace Behaviours\Cigarette;

interface CigaretteInterface
{
	public function smokesDunhill() : ?bool;
	public function smokesPallMall() : ?bool;
	public function smokesPrince() : ?bool;
	public function smokesBluemasters() : ?bool;
	public function smokesBlends() : ?bool;
}