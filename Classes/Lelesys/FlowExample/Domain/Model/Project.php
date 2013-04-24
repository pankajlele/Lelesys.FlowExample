<?php
namespace Lelesys\FlowExample\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Lelesys.FlowExample".   *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Project
 *
 * @Flow\Entity
 */
class Project {

	/**
	 * The title
	 * @var string
	 */
	protected $title;

	/**
	 * The participant
	 * @var \Doctrine\Common\Collections\Collection<Lelesys\FlowExample\Domain\Model\Participant>
	 * @ORM\OneToMany(mappedBy="project")
	 */
	protected $participants;

	/**
	 * The task
	 * @var \Doctrine\Common\Collections\Collection<Lelesys\FlowExample\Domain\Model\Task>
	 * @ORM\OneToMany(mappedBy="project")
	 */
	protected $tasks;


	/**
	 * Get the Project's title
	 *
	 * @return string The Project's title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets this Project's title
	 *
	 * @param string $title The Project's title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Get the Project's participants
	 *
	 * @return \Doctrine\Common\Collections\Collection The Project's participants
	 */
	public function getParticipants() {
		return $this->participants;
	}

	/**
	 * Sets this Project's participants
	 *
	 * @param \Doctrine\Common\Collections\Collection $participants The Project's participants
	 * @return void
	 */
	public function setParticipant(\Doctrine\Common\Collections\Collection $participants) {
		$this->participants = $participant;
	}

	/**
	 * Get the Project's tasks
	 *
	 * @return \Doctrine\Common\Collections\Collection The Project's tasks
	 */
	public function getTasks() {
		return $this->tasks;
	}

	/**
	 * Sets this Project's tasks
	 *
	 * @param \Doctrine\Common\Collections\Collection $tasks The Project's tasks
	 * @return void
	 */
	public function setTasks(\Doctrine\Common\Collections\Collection $tasks) {
		$this->task = $tasks;
	}

}
?>