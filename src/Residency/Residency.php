<?php

namespace Residency;

use Person\PersonInterface;

class Residency implements ResidencyInterface
{
	private $leftNeighbour;

	private $rightNeighbour;

	/** @var PersonInterface */
	private $person;

	public function __construct(PersonInterface $person, ?PersonInterface $leftNeighbour, ?PersonInterface $rightNeighbour)
	{
		$this->person = $person;
		$this->leftNeighbour = $leftNeighbour;
		$this->rightNeighbour = $rightNeighbour;
	}

	/**
	 * @param ResidencyInterface $residency
	 *
	 * @return bool
	 */
	public function livesNextTo(ResidencyInterface $residency)
	{
		if ($residency instanceof NullResidency)
			return null;

		return $this->leftNeighbour === $residency->getPerson() || $this->rightNeighbour === $residency->getPerson();
	}

	/**
	 * @param ResidencyInterface $residency
	 *
	 * @return bool
	 */
	public function livesIn(ResidencyInterface $residency)
	{
		return $this->is($residency);
	}

	/**
	 * @param ResidencyInterface $residency
	 *
	 * @return bool
	 */
	public function is(ResidencyInterface $residency)
	{
		if ($residency instanceof NullResidency)
			return null;

		return $this === $residency;
	}

	/**
	 * @param ResidencyInterface $residency
	 *
	 * @return mixed
	 */
	public function isImmediatelyLeftOf(ResidencyInterface $residency)
	{
		if ($residency instanceof NullResidency)
			return null;

		if ($this->rightNeighbour === $residency->getPerson())
			return true;
		else
			return false;
	}

	public function hasNullBehaviour(): bool
	{
		return $this->person->hasNullBehaviours();
	}

	public function getPerson(): PersonInterface
	{
		return $this->person;
	}
}