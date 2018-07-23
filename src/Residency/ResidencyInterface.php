<?php

namespace Residency;

use Person\PersonInterface;

interface ResidencyInterface
{
	/**
	 * @param ResidencyInterface $residency
	 *
	 * @return bool
	 */
	public function livesNextTo(ResidencyInterface $residency);

	/**
	 * @param ResidencyInterface $residency
	 *
	 * @return bool
	 */
	public function livesIn(ResidencyInterface $residency);

	/**
	 * @param ResidencyInterface $residency
	 *
	 * @return bool
	 */
	public function is(ResidencyInterface $residency);

	/**
	 * @param ResidencyInterface $residency
	 *
	 * @return mixed
	 */
	public function isImmediatelyLeftOf(ResidencyInterface $residency);

	public function hasNullBehaviour() : bool;

	public function getPerson() : PersonInterface;
}