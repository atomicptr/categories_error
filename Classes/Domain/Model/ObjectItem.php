<?php

namespace Atomicptr\CategoriesError\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class ObjectItem extends AbstractEntity {

    /**
     * Title
     * @var \string
     */
    protected $title;

    /**
     * Categories
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
     */
    protected $categories;

    public function getCategories() {
        return $this->categories;
    }

    public function getTitle() {
        return $this->title;
    }
}
