<?php
namespace Lelesys\FlowExample\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Lelesys.FlowExample".   *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Lelesys\FlowExample\Domain\Model\Project;

/**
 * Participant controller for the Lelesys.FlowExample package
 *
 * @Flow\Scope("singleton")
 */
class ParticipantController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Lelesys\FlowExample\Domain\Repository\ParticipantRepository
	 */
	protected $participantRepository;

	/**
	 * Shows a list of all participants
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('participants', $this->participantRepository->findAll());
	}

	/**
	 * Shows a list of idle participants
	 *
	 * @return void
	 */
	public function listIdleAction() {
		$this->view->assign('participants', $this->participantRepository->findIdle());
	}

}

?>