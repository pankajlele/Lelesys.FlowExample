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
class ParticipantRepository extends \TYPO3\Flow\Persistence\Doctrine\Repository {

	/**
	 * Gives all participants who dont have any task assigned
	 *
	 * @return array
	 */
	public function findIdle() {
		$result = $this->entityManager->createQuery('SELECT p FROM Lelesys\FlowExample\Domain\Model\Participant as p LEFT JOIN' .
				' p.tasks t WHERE t.title IS NULL')
                        ->execute();
		return $result;
	}

}
?>