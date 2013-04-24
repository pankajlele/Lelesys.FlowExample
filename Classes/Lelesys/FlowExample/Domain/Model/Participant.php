<?php
namespace Lelesys\FlowExample\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Lelesys.FlowExample".   *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Participant
 *
 * @Flow\Entity
 */
class Participant {

	/**
	 * The name
	 * @var string
	 */
	protected $name;

	/**
	 * The email
	 * @var string
	 */
	protected $email;

	/**
	 * The project
	 * @var \Lelesys\FlowExample\Domain\Model\Project
	 * @ORM\ManyToOne(inversedBy="participants", cascade={"persist"})
	 */
	protected $project;

	/**
	 * The task
	 * @var \Doctrine\Common\Collections\Collection<Lelesys\FlowExample\Domain\Model\Task>
	 * @ORM\OneToMany(mappedBy="participant")
	 */
	protected $tasks;


	/**
	 * Get the Participant's name
	 *
	 * @return string The Participant's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Participant's name
	 *
	 * @param string $name The Participant's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Get the Participant's email
	 *
	 * @return string The Participant's email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets this Participant's email
	 *
	 * @param string $email The Participant's email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Get the Participant's project
	 *
	 * @return \Lelesys\FlowExample\Domain\Model\Project The Participant's project
	 */
	public function getProject() {
		return $this->project;
	}

	/**
	 * Sets this Participant's project
	 *
	 * @param \Lelesys\FlowExample\Domain\Model\Project $project The Participant's project
	 * @return void
	 */
	public function setProject($project) {
		$this->project = $project;
	}

	/**
	 * Get the Participant's tasks
	 *
	 * @return \Doctrine\Common\Collections\Collection The Participant's tasks
	 */
	public function getTasks() {
		return $this->tasks;
	}

	/**
	 * Sets this Participant's tasks
	 *
	 * @param \Doctrine\Common\Collections\Collection $tasks The Participant's tasks
	 * @return void
	 */
	public function setTasks(\Doctrine\Common\Collections\Collection $tasks) {
		$this->task = $tasks;
	}

}
?>