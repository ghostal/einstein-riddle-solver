<?php

namespace Residency;

use Person\PersonInterface;

class NullResidency implements ResidencyInterface
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
		return null;
	}

	/**
	 * @param ResidencyInterface $residency
	 *
	 * @return bool
	 */
	public function livesIn(ResidencyInterface $residency)
	{
		return null;
	}

	/**
	 * @param ResidencyInterface $residency
	 *
	 * @return bool
	 */
	public function is(ResidencyInterface $residency)
	{
		return null;
	}

	/**
	 * @param ResidencyInterface $residency
	 *
	 * @return mixed
	 */
	public function isImmediatelyLeftOf(ResidencyInterface $residency)
	{
		return null;
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