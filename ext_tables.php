<?php

call_user_func(function () {

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        "Atomicptr.CategoriesError",
        "web",
        "list",
        "",
        [
            "Test" => "list"
        ],
        [
            "access" => "user,group",
            "icon" => "EXT:categories_error/ext_icon.png",
            "labels" => "LLL:EXT:categories_error/Resources/Private/Language/locallang.xlf",
        ]
    );
});
