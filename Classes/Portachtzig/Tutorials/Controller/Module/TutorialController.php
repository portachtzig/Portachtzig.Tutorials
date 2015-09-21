<?php
namespace Portachtzig\Tutorials\Controller\Module;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Portachtzig.Tutorials". *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Error\Message;

/**
 * @Flow\Scope("singleton")
 */
class TutorialController extends \TYPO3\Neos\Controller\Module\AbstractModuleController {

	/**
	 * @Flow\Inject
	 * @var \Portachtzig\Tutorials\Domain\Repository\TutorialRepository
	 */
	protected $tutorialRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('tutorials', $this->tutorialRepository->findAll());
	}

	/**
	 * @param \Portachtzig\Tutorials\Domain\Model\Tutorial $tutorial
	 * @return void
	 */
	public function showAction(\Portachtzig\Tutorials\Domain\Model\Tutorial $tutorial) {
		$this->view->assign('tutorial', $tutorial);
	}

	/**
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * @param \Portachtzig\Tutorials\Domain\Model\Tutorial $newTutorial
	 * @return void
	 */
	public function createAction(\Portachtzig\Tutorials\Domain\Model\Tutorial $newTutorial) {
		$this->tutorialRepository->add($newTutorial);
		$this->addFlashMessage('Created a new tutorial.');
		$this->redirect('index');
	}

	/**
	 * @param \Portachtzig\Tutorials\Domain\Model\Tutorial $tutorial
	 * @return void
	 */
	public function editAction(\Portachtzig\Tutorials\Domain\Model\Tutorial $tutorial) {
		$this->view->assign('tutorial', $tutorial);
	}

	/**
	 * @param \Portachtzig\Tutorials\Domain\Model\Tutorial $tutorial
	 * @return void
	 */
	public function updateAction(\Portachtzig\Tutorials\Domain\Model\Tutorial $tutorial) {
		$this->tutorialRepository->update($tutorial);
		$this->addFlashMessage('Updated the tutorial.');
		$this->redirect('index');
	}

	/**
	 * @param \Portachtzig\Tutorials\Domain\Model\Tutorial $tutorial
	 * @return void
	 */
	public function deleteAction(\Portachtzig\Tutorials\Domain\Model\Tutorial $tutorial) {
		$this->tutorialRepository->remove($tutorial);
		$this->addFlashMessage('Deleted a tutorial.');
		$this->redirect('index');
	}

}