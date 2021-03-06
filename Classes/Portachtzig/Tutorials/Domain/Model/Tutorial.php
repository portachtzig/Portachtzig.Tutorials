<?php
namespace Portachtzig\Tutorials\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Portachtzig.Tutorials". *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Tutorial {

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var string
	 * @ORM\Column(type="text")
	 * @Flow\Validate(type="Raw")
	 */
	protected $embedcode;


	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getEmbedcode() {
		return $this->embedcode;
	}

	/**
	 * @param string $embedcode
	 * @return void
	 */
	public function setEmbedcode($embedcode) {
		$this->embedcode = $embedcode;
	}

}