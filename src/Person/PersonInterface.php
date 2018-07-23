<?php

namespace Person;

use Behaviours\Cigarette\CigaretteInterface;
use Behaviours\Drink\DrinkInterface;
use Behaviours\HouseColour\HouseColourInterface;
use Behaviours\Nationality\NationalityInterface;
use Behaviours\PetOwnership\PetOwnershipInterface;

interface PersonInterface
{
	public function hasNullBehaviours() : bool;

	public function smokes(CigaretteInterface $cigarette) : bool;
	public function drinks(DrinkInterface $drink) : bool;
	public function livesInHouse(HouseColourInterface $houseColor) : bool;
	public function hasNationality(NationalityInterface $nationality) : bool;
	public function hasPet(PetOwnershipInterface $pet) : bool;

	public function setCigarette(CigaretteInterface $cigarette);
	public function setDrink(DrinkInterface $drink);
	public function setHouse(HouseColourInterface $houseColor);
	public function setNationality(NationalityInterface $nationality);
	public function setPet(PetOwnershipInterface $pet);

	public function getCigaretteBehaviour(): CigaretteInterface;

	public function getDrinkBehaviour(): DrinkInterface;

	public function getHouseColourBehaviour(): HouseColourInterface;

	public function getNationalityBehaviour() : NationalityInterface;

	public function getPetOwnershipBehaviour(): PetOwnershipInterface;
}