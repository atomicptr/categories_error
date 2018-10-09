<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    "categories_error",
    "tx_categorieserror_domain_model_objectitem",
    "categories",
    [
        "label" => "Categories",
        "fieldConfiguration" => [
            "foreign_table_where" =>
                " AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.title ASC",
        ]
    ]
);
