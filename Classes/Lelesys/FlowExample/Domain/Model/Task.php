<?php
namespace Lelesys\FlowExample\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Lelesys.FlowExample".   *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Task
 *
 * @Flow\Entity
 */
class Task {

	/**
	 * The title
	 * @var string
	 */
	protected $title;

	/**
	 * The project
	 * @var \Lelesys\FlowExample\Domain\Model\Project
	 * @ORM\ManyToOne(inversedBy="tasks", cascade={"persist"})
	 */
	protected $project;

	/**
	 * The participant
	 * @var \Lelesys\FlowExample\Domain\Model\Participant
	 * @ORM\ManyToOne(inversedBy="tasks", cascade={"persist"})
	 */
	protected $participant;


	/**
	 * Get the Task's title
	 *
	 * @return string The Task's title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets this Task's title
	 *
	 * @param string $title The Task's title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Get the Task's project
	 *
	 * @return \Lelesys\FlowExample\Domain\Model\Project The Task's project
	 */
	public function getProject() {
		return $this->project;
	}

	/**
	 * Sets this Task's project
	 *
	 * @param \Lelesys\FlowExample\Domain\Model\Project $project The Task's project
	 * @return void
	 */
	public function setProject($project) {
		$this->project = $project;
	}

	/**
	 * Get the Task's participant
	 *
	 * @return \Lelesys\FlowExample\Domain\Model\Participant The Task's participant
	 */
	public function getParticipant() {
		return $this->participant;
	}

	/**
	 * Sets this Task's participant
	 *
	 * @param \Lelesys\FlowExample\Domain\Model\Participant $participant The Task's participant
	 * @return void
	 */
	public function setParticipant($participant) {
		$this->participant = $participant;
	}

}
?>