<?php

namespace Atomicptr\CategoriesError\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class TestController extends ActionController {

    /**
     * @var Atomicptr\CategoriesError\Domain\Repository\ObjectItemRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $objectItemRepository;

    public function listAction() {
        $objects = $this->objectItemRepository->findAll();

        $this->view->assign("objects", $objects);
    }
}
