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
 * Project controller for the Lelesys.FlowExample package
 *
 * @Flow\Scope("singleton")
 */
class ProjectController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Lelesys\FlowExample\Domain\Repository\ProjectRepository
	 */
	protected $projectRepository;

	/**
	 * Shows a list of projects
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('projects', $this->projectRepository->findAllWithTaskCounts());
	}

}

?>