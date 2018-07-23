<?php

use Behaviours\Cigarette\NullCigarette;
use Behaviours\Drink\NullDrink;
use Behaviours\HouseColour\NullHouseColour;
use Behaviours\Nationality\NullNationality;
use Behaviours\PetOwnership\NullPetOwnership;
use Person\Person;
use Person\PersonInterface;
use Residency\Residency;
use Street\Street;
use Street\StreetInterface;

class Solver
{
	/** @var StreetInterface */
	private $street;
	private $cigarettes;
	private $drinks;
	private $houseColours;
	private $nationalities;
	private $pets;

	private $usedCigarettesStack;
	private $usedDrinksStack;
	private $usedHouseColoursStack;
	private $usedNationalitiesStack;
	private $usedPetsStack;

	/**
	 * Solver constructor.
	 *
	 * @param StreetInterface $street
	 * @param PersonInterface[] $people
	 */
	public function __construct(StreetInterface $street)
	{
		$this->street = $street;

		$people = [];
		for ($i = 0; $i < 5; $i ++) {
			$people[] = new Person(
				new NullNationality(),
				new NullHouseColour(),
				new NullDrink(),
				new NullCigarette(),
				new NullPetOwnership()
			);
		}

		for ($i = 0, $j = count($people); $i < $j; $i ++) {
			$street->addResidency(
				new Residency(
					$people[ $i ],
					$people[ $i - 1 ] ?? null,
					$people[ $i + 1 ] ?? null
				)
			);
		}

		$this->cigarettes = [
			new \Behaviours\Cigarette\Blends(),
			new \Behaviours\Cigarette\Bluemasters(),
			new \Behaviours\Cigarette\Dunhill(),
			new \Behaviours\Cigarette\PallMall(),
			new \Behaviours\Cigarette\Prince(),
		];
		$this->usedCigarettesStack = [];

		$this->drinks = [
			new \Behaviours\Drink\Beer(),
			new \Behaviours\Drink\Coffee(),
			new \Behaviours\Drink\Milk(),
			new \Behaviours\Drink\Tea(),
			new \Behaviours\Drink\Water(),
		];
		$this->usedDrinksStack = [];

		$this->houseColours = [
			new \Behaviours\HouseColour\Blue(),
			new \Behaviours\HouseColour\Green(),
			new \Behaviours\HouseColour\Red(),
			new \Behaviours\HouseColour\White(),
			new \Behaviours\HouseColour\Yellow(),
		];
		$this->usedHouseColoursStack = [];

		$this->nationalities = [
			new \Behaviours\Nationality\British(),
			new \Behaviours\Nationality\Danish(),
			new \Behaviours\Nationality\German(),
			new \Behaviours\Nationality\Norwegian(),
			new \Behaviours\Nationality\Swedish(),
		];
		$this->usedNationalitiesStack = [];

		$this->pets = [
			new \Behaviours\PetOwnership\KeepsCats(),
			new \Behaviours\PetOwnership\KeepsDogs(),
			new \Behaviours\PetOwnership\KeepsFish(),
			new \Behaviours\PetOwnership\KeepsTheHorse(),
			new \Behaviours\PetOwnership\RearsBirds(),
		];
		$this->usedPetsStack = [];

		var_dump($this->solve());
	}

	private function solve()
	{
		if ( ! $this->street->hasNullBehaviours()) {
			return true;
		}

		if (count($this->cigarettes) - count($this->usedCigarettesStack)) {
			for ($i = 0, $j = count($this->cigarettes); $i < $j; $i++) {

				if (in_array($this->cigarettes[$i], $this->usedCigarettesStack, true))
					continue;

				$this->street->addCigaretteBehaviour($this->cigarettes[$i]);

				if ( ! $this->checkRules() ) {
					$this->street->clearCigaretteBehaviour($this->cigarettes[$i]);
				} else {
					$this->usedCigarettesStack[] = $this->cigarettes[$i];
					if ( ! $this->solve() ) {
						$this->street->clearCigaretteBehaviour($this->cigarettes[$i]);
						array_pop($this->usedCigarettesStack);
					} else {
						return true;
					}
				}
			}

			return false;
		}

		if (count($this->drinks) - count($this->usedDrinksStack)) {
			for ($i = 0, $j = count($this->drinks); $i < $j; $i++) {

				if (in_array($this->drinks[$i], $this->usedDrinksStack, true))
					continue;

				$this->street->addDrinkBehaviour($this->drinks[$i]);

				if ( ! $this->checkRules() ) {
					$this->street->clearDrinkBehaviour($this->drinks[$i]);
				} else {
					$this->usedDrinksStack[] = $this->drinks[$i];
					if ( ! $this->solve() ) {
						$this->street->clearDrinkBehaviour($this->drinks[$i]);
						array_pop($this->usedDrinksStack);
					} else {
						return true;
					}
				}
			}

			return false;
		}

		if (count($this->houseColours) - count($this->usedHouseColoursStack)) {
			for ($i = 0, $j = count($this->houseColours); $i < $j; $i++) {

				if (in_array($this->houseColours[$i], $this->usedHouseColoursStack, true))
					continue;

				$this->street->addHouseColourBehaviour($this->houseColours[$i]);

				if ( ! $this->checkRules() ) {
					$this->street->clearHouseColourBehaviour($this->houseColours[$i]);
				} else {
					$this->usedHouseColoursStack[] = $this->houseColours[$i];
					if ( ! $this->solve() ) {
						$this->street->clearHouseColourBehaviour($this->houseColours[$i]);
						array_pop($this->usedHouseColoursStack);
					} else {
						return true;
					}
				}
			}

			return false;
		}

		if (count($this->nationalities) - count($this->usedNationalitiesStack)) {
			for ($i = 0, $j = count($this->nationalities); $i < $j; $i++) {

				if (in_array($this->nationalities[$i], $this->usedNationalitiesStack, true))
					continue;

				$this->street->addNationalityBehaviour($this->nationalities[$i]);

				if ( ! $this->checkRules() ) {
					$this->street->clearNationalityBehaviour($this->nationalities[$i]);
				} else {
					$this->usedNationalitiesStack[] = $this->nationalities[$i];
					if ( ! $this->solve() ) {
						$this->street->clearNationalityBehaviour($this->nationalities[$i]);
						array_pop($this->usedNationalitiesStack);
					} else {
						return true;
					}
				}
			}

			return false;
		}

		if (count($this->pets) - count($this->usedPetsStack)) {
			for ($i = 0, $j = count($this->pets); $i < $j; $i++) {

				if (in_array($this->pets[$i], $this->usedPetsStack, true))
					continue;

				$this->street->addPetOwnershipBehaviour($this->pets[$i]);

				if ( ! $this->checkRules() ) {
					$this->street->clearPetOwnershipBehaviour($this->pets[$i]);
				} else {
					$this->usedPetsStack[] = $this->pets[$i];
					if ( ! $this->solve() ) {
						$this->street->clearPetOwnershipBehaviour($this->pets[$i]);
						array_pop($this->usedPetsStack);
					} else {
						return true;
					}
				}
			}

			return false;
		}

		throw new Exception('Execution reached an unexpected point');
	}

	private function checkRules()
	{
		$this->street->printDebug();
		//1. The Brit lives in the red house.
		//2. The Swede keeps dogs as pets.
		//3. The Dane drinks tea.
		//4. The green house is on the immediate left of the white house.
		//5. The green house's owner drinks coffee.

		//6. The owner who smokes Pall Mall rears birds.
		//7. The owner of the yellow house smokes Dunhill.
		//8. The owner living in the center house drinks milk.
		//9. The Norwegian lives in the first house.
		//10. The owner who smokes Blends lives next to the one who keeps cats.

		//11. The owner who keeps the horse lives next to the one who smokes Dunhill.
		//12. The owner who smokes Bluemasters drinks beer.
		//13. The German smokes Prince.
		//14. The Norwegian lives next to the blue house.
		//15. The owner who smokes Blends lives next to the one who drinks water.

		$check = [];
		$the   = $this->street;

		$check[] = $the->brit()->livesIn($the->redHouse());
		$check[] = $the->swede()->is($the->manWhoKeepsDogs());
		$check[] = $the->dane()->is($the->manWhoDrinksTea());
		$check[] = $the->greenHouse()->isImmediatelyLeftOf($the->whiteHouse());
		$check[] = $the->manWhoDrinksCoffee()->livesIn($the->greenHouse());

		$check[] = $the->manWhoSmokesPallMall()->is($the->manWhoRearsBirds());
		$check[] = $the->manWhoSmokesDunhill()->livesIn($the->yellowHouse());
		$check[] = $the->manWhoDrinksMilk()->livesIn($the->centerHouse());
		$check[] = $the->norwegian()->livesIn($the->firstHouse());
		$check[] = $the->manWhoSmokesBlends()->livesNextTo($the->manWhoKeepsCats());

		$check[] = $the->manWhoKeepsTheHorse()->livesNextTo($the->manWhoSmokesDunhill());
		$check[] = $the->manWhoSmokesBluemasters()->is($the->manWhoDrinksBeer());
		$check[] = $the->german()->is($the->manWhoSmokesPrince());
		$check[] = $the->norwegian()->livesNextTo($the->blueHouse());
		$check[] = $the->manWhoSmokesBlends()->livesNextTo($the->manWhoDrinksWater());

		foreach ($check as $result) {
			if ($result === false) {
				return false;
			}
		}

		return true;
	}
}




spl_autoload_register(function ($class) {

	// base directory for the namespace prefix
	$base_dir = __DIR__ . '/src/';

	// replace the namespace prefix with the base directory, replace namespace
	// separators with directory separators in the relative class name, append
	// with .php
	$file = $base_dir . str_replace('\\', '/', $class) . '.php';

	// if the file exists, require it
	if (file_exists($file)) {
		require $file;
	}
});

new Solver(new Street());