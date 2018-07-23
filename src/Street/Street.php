<?php

namespace Street;

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
use Person\Person;
use Residency\NullResidency;
use Residency\ResidencyInterface;

class Street implements StreetInterface {
	/**
	 * @var ResidencyInterface[]
	 */
	private $residencies = [];

	public function __construct($streetLength = 5)
	{
	}

	private function nullResidency()
	{
		return new NullResidency(
			new Person(
				new NullNationality(),
				new NullHouseColour(),
				new NullDrink(),
				new NullCigarette(),
				new NullPetOwnership()
			),
			null,
			null
		);
	}

	/**
	 * @return ResidencyInterface
	 */
	public function brit()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getNationalityBehaviour()->isBritish()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function swede()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getNationalityBehaviour()->isSwedish()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function dane()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getNationalityBehaviour()->isDanish()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function norwegian()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getNationalityBehaviour()->isNorwegian()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function german()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getNationalityBehaviour()->isGerman()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function greenHouse()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getHouseColourBehaviour()->livesInTheGreenHouse()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function whiteHouse()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getHouseColourBehaviour()->livesInTheWhiteHouse()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function yellowHouse()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getHouseColourBehaviour()->livesInTheYellowHouse()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function redHouse()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getHouseColourBehaviour()->livesInTheRedHouse()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function blueHouse()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getHouseColourBehaviour()->livesInTheBlueHouse()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoDrinksMilk()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getDrinkBehaviour()->drinksMilk()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoDrinksCoffee()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getDrinkBehaviour()->drinksCoffee()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoDrinksTea()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getDrinkBehaviour()->drinksTea()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoDrinksWater()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getDrinkBehaviour()->drinksWater()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoDrinksBeer()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getDrinkBehaviour()->drinksBeer()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoSmokesDunhill()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getCigaretteBehaviour()->smokesDunhill()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoSmokesPallMall()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getCigaretteBehaviour()->smokesPallMall()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoSmokesPrince()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getCigaretteBehaviour()->smokesPrince()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoSmokesBluemasters()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getCigaretteBehaviour()->smokesBluemasters()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoSmokesBlends()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getCigaretteBehaviour()->smokesBlends()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoKeepsCats()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getPetOwnershipBehaviour()->keepsCats()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoKeepsDogs()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getPetOwnershipBehaviour()->keepsDogs()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoKeepsTheHorse()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getPetOwnershipBehaviour()->keepsTheHorse()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoRearsBirds()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getPetOwnershipBehaviour()->rearsBirds()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 */
	public function manWhoKeepsFish()
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->getPetOwnershipBehaviour()->keepsFish()) {
				return $residency;
			}
		}
		return $this->nullResidency();
	}

	/**
	 * @return ResidencyInterface
	 * @throws \Exception
	 */
	public function centerHouse()
	{
		if (count($this->residencies) % 2 != 1) {
			throw new \Exception();
		}

		$centerIndex = (count($this->residencies) - 1) / 2;

		return $this->residencies[$centerIndex];
	}

	/**
	 * @return ResidencyInterface
	 */
	public function firstHouse()
	{
		return $this->residencies[0];
	}

	public function addResidency(ResidencyInterface $residency)
	{
		$this->residencies[] = $residency;
	}

	public function hasNullBehaviours(): bool
	{
		foreach ($this->residencies as $residency) {
			if ($residency->hasNullBehaviour())
				return true;
		}

		return false;
	}

	public function addCigaretteBehaviour(CigaretteInterface $cigarette)
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->smokes(new NullCigarette())) {
				$residency->getPerson()->setCigarette($cigarette);
				return;
			}
		}
		throw new \Exception();
	}

	public function clearCigaretteBehaviour(CigaretteInterface $cigarette)
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->smokes($cigarette)) {
				$residency->getPerson()->setCigarette(new NullCigarette());
			}
		}
	}

	public function addDrinkBehaviour(DrinkInterface $drink)
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->drinks(new NullDrink())) {
				$residency->getPerson()->setDrink($drink);
				return;
			}
		}
		throw new \Exception();
	}

	public function clearDrinkBehaviour(DrinkInterface $drink)
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->drinks($drink)) {
				$residency->getPerson()->setDrink(new NullDrink());
			}
		}
	}

	public function addHouseColourBehaviour(HouseColourInterface $houseColour)
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->livesInHouse(new NullHouseColour())) {
				$residency->getPerson()->setHouse($houseColour);
				return;
			}
		}
		throw new \Exception();
	}

	public function clearHouseColourBehaviour(HouseColourInterface $houseColour)
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->livesInHouse($houseColour)) {
				$residency->getPerson()->setHouse(new NullHouseColour());
			}
		}
	}

	public function addNationalityBehaviour(NationalityInterface $nationality)
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->hasNationality(new NullNationality())) {
				$residency->getPerson()->setNationality($nationality);
				return;
			}
		}
		throw new \Exception();
	}

	public function clearNationalityBehaviour(NationalityInterface $nationality)
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->hasNationality($nationality)) {
				$residency->getPerson()->setNationality(new NullNationality());
			}
		}
	}

	public function addPetOwnershipBehaviour(PetOwnershipInterface $pet)
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->hasPet(new NullPetOwnership())) {
				$residency->getPerson()->setPet($pet);
				return;
			}
		}
		throw new \Exception();
	}

	public function clearPetOwnershipBehaviour(PetOwnershipInterface $pet)
	{
		foreach ($this->residencies as $residency) {
			if ($residency->getPerson()->hasPet($pet)) {
				$residency->getPerson()->setPet(new NullPetOwnership());
			}
		}
	}

	public function printDebug()
	{
		$pad = 14;

		echo '---' . PHP_EOL;
		foreach ($this->residencies as $residency) {
			$person = $residency->getPerson();
			echo '[' . implode(' | ', [
					str_pad(substr(end(explode('\\', get_class($person->getCigaretteBehaviour()))), 0, $pad), $pad, ' '),
					str_pad(substr(end(explode('\\', get_class($person->getDrinkBehaviour()))), 0, $pad), $pad, ' '),
					str_pad(substr(end(explode('\\', get_class($person->getHouseColourBehaviour()))), 0, $pad), $pad, ' '),
					str_pad(substr(end(explode('\\', get_class($person->getNationalityBehaviour()))), 0, $pad), $pad, ' '),
					str_pad(substr(end(explode('\\', get_class($person->getPetOwnershipBehaviour()))), 0, $pad), $pad, ' '),
				]) . ']' . "\n";
		}
	}
}