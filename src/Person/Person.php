<?php

namespace Person;

use Behaviours\Cigarette\CigaretteInterface;
use Behaviours\Cigarette\NullCigarette;
use Behaviours\Drink\DrinkInterface;
use Behaviours\Drink\NullDrink;
use Behaviours\HouseColour\HouseColourInterface;
use Behaviours\HouseColour\NullHouseColour;
use Behaviours\Nationality\NationalityInterface;
use Behaviours\Nationality\NullNationality;
use Behaviours\PetOwnership\NullPetOwnership;
use Behaviours\PetOwnership\PetOwnershipInterface;

class Person implements PersonInterface
{
	/**
	 * @var NationalityInterface
	 */
	private $nationalityBehaviour;

	/**
	 * @var HouseColourInterface
	 */
	private $houseColourBehaviour;

	/**
	 * @var DrinkInterface
	 */
	private $drinkBehaviour;

	/**
	 * @var CigaretteInterface
	 */
	private $cigaretteBehaviour;

	/**
	 * @var PetOwnershipInterface
	 */
	private $petBehaviour;

	public function __construct(
		NationalityInterface $nationalityBehaviour,
		HouseColourInterface $houseColourBehaviour,
		DrinkInterface $drinkBehaviour,
		CigaretteInterface $cigaretteBehaviour,
		PetOwnershipInterface $petBehaviour
	) {
		$this->nationalityBehaviour = $nationalityBehaviour;
		$this->houseColourBehaviour = $houseColourBehaviour;
		$this->drinkBehaviour       = $drinkBehaviour;
		$this->cigaretteBehaviour   = $cigaretteBehaviour;
		$this->petBehaviour         = $petBehaviour;
	}

	public function hasNullBehaviours(): bool
	{
		if ($this->nationalityBehaviour instanceof NullNationality) {
			return true;
		}

		if ($this->houseColourBehaviour instanceof NullHouseColour) {
			return true;
		}

		if ($this->drinkBehaviour instanceof NullDrink) {
			return true;
		}

		if ($this->cigaretteBehaviour instanceof NullCigarette) {
			return true;
		}

		if ($this->petBehaviour instanceof NullPetOwnership) {
			return true;
		}

		return false;
	}

	public function smokes(CigaretteInterface $cigarette): bool
	{
		return $this->cigaretteBehaviour instanceof $cigarette;
	}

	public function setCigarette(CigaretteInterface $cigarette)
	{
		$this->cigaretteBehaviour = $cigarette;
	}

	public function drinks(DrinkInterface $drink): bool
	{
		return $this->drinkBehaviour instanceof $drink;
	}

	public function setDrink(DrinkInterface $drink)
	{
		$this->drinkBehaviour = $drink;
	}

	public function livesInHouse(HouseColourInterface $houseColor): bool
	{
		return $this->houseColourBehaviour instanceof $houseColor;
	}

	public function setHouse(HouseColourInterface $houseColor)
	{
		$this->houseColourBehaviour = $houseColor;
	}

	public function hasNationality(NationalityInterface $nationality): bool
	{
		return $this->nationalityBehaviour instanceof $nationality;
	}

	public function setNationality(NationalityInterface $nationality)
	{
		$this->nationalityBehaviour = $nationality;
	}

	public function hasPet(PetOwnershipInterface $pet): bool
	{
		return $this->petBehaviour instanceof $pet;
	}

	public function setPet(PetOwnershipInterface $pet)
	{
		$this->petBehaviour = $pet;
	}

	public function getCigaretteBehaviour(): CigaretteInterface
	{
		return $this->cigaretteBehaviour;
	}

	public function getDrinkBehaviour(): DrinkInterface
	{
		return $this->drinkBehaviour;
	}

	public function getHouseColourBehaviour(): HouseColourInterface
	{
		return $this->houseColourBehaviour;
	}

	public function getNationalityBehaviour(): NationalityInterface
	{
		return $this->nationalityBehaviour;
	}

	public function getPetOwnershipBehaviour(): PetOwnershipInterface
	{
		return $this->petBehaviour;
	}
}