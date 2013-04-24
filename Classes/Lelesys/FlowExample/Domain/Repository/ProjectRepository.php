<?php
namespace Lelesys\FlowExample\Domain\Repository;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Lelesys.FlowExample".   *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

/**
 * A repository for Projects
 *
 * @Flow\Scope("singleton")
 */
class ProjectRepository extends \TYPO3\Flow\Persistence\Doctrine\Repository {

	/**
	 * Gives all projects with number of tasks assigned
	 *
	 * @return array
	 */
	public function findAllWithTaskCounts() {
		$result = $this->entityManager->createQuery('SELECT p as project, count(t.Persistence_Object_Identifier) as taskCount' .
				' FROM Lelesys\FlowExample\Domain\Model\Project p JOIN p.tasks as t GROUP BY p ORDER BY taskCount DESC')
                        ->execute();
		return $result;
	}

}
?>