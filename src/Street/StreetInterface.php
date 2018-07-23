<?php

namespace Street;

use Behaviours\Cigarette\CigaretteInterface;
use Behaviours\Drink\DrinkInterface;
use Behaviours\HouseColour\HouseColourInterface;
use Behaviours\Nationality\NationalityInterface;
use Behaviours\PetOwnership\PetOwnershipInterface;
use Residency\ResidencyInterface;

interface StreetInterface {
	//
	// Rule search functions
	//

	/**
	 * @return ResidencyInterface
	 */
	public function brit();
	/**
	 * @return ResidencyInterface
	 */
	public function swede();
	/**
	 * @return ResidencyInterface
	 */
	public function dane();
	/**
	 * @return ResidencyInterface
	 */
	public function norwegian();
	/**
	 * @return ResidencyInterface
	 */
	public function german();

	/**
	 * @return ResidencyInterface
	 */
	public function greenHouse();
	/**
	 * @return ResidencyInterface
	 */
	public function whiteHouse();
	/**
	 * @return ResidencyInterface
	 */
	public function yellowHouse();
	/**
	 * @return ResidencyInterface
	 */
	public function redHouse();
	/**
	 * @return ResidencyInterface
	 */
	public function blueHouse();

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoDrinksMilk();
	/**
	 * @return ResidencyInterface
	 */
	public function manWhoDrinksCoffee();
	/**
	 * @return ResidencyInterface
	 */
	public function manWhoDrinksTea();
	/**
	 * @return ResidencyInterface
	 */
	public function manWhoDrinksWater();
	/**
	 * @return ResidencyInterface
	 */
	public function manWhoDrinksBeer();

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoSmokesDunhill();
	/**
	 * @return ResidencyInterface
	 */
	public function manWhoSmokesPallMall();
	/**
	 * @return ResidencyInterface
	 */
	public function manWhoSmokesPrince();
	/**
	 * @return ResidencyInterface
	 */
	public function manWhoSmokesBluemasters();
	/**
	 * @return ResidencyInterface
	 */
	public function manWhoSmokesBlends();

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoKeepsCats();
	/**
	 * @return ResidencyInterface
	 */
	public function manWhoKeepsDogs();
	/**
	 * @return ResidencyInterface
	 */
	public function manWhoKeepsTheHorse();
	/**
	 * @return ResidencyInterface
	 */
	public function manWhoRearsBirds();
	/**
	 * @return ResidencyInterface
	 */
	public function manWhoKeepsFish();

	/**
	 * @return ResidencyInterface
	 */
	public function centerHouse();
	/**
	 * @return ResidencyInterface
	 */
	public function firstHouse();

	//
	// Manipulation functions
	//
	public function addResidency(ResidencyInterface $residency);

	public function addCigaretteBehaviour(CigaretteInterface $cigarette);

	public function clearCigaretteBehaviour(CigaretteInterface $cigarette);

	public function addDrinkBehaviour(DrinkInterface $drink);

	public function clearDrinkBehaviour(DrinkInterface $drink);




	public function addHouseColourBehaviour(HouseColourInterface $houseColour);

	public function clearHouseColourBehaviour(HouseColourInterface $houseColour);

	public function addNationalityBehaviour(NationalityInterface $nationality);

	public function clearNationalityBehaviour(NationalityInterface $nationality);

	public function addPetOwnershipBehaviour(PetOwnershipInterface $pet);

	public function clearPetOwnershipBehaviour(PetOwnershipInterface $pet);

	//
	// Recursion tests
	//
	public function hasNullBehaviours() : bool;

	public function printDebug();
}