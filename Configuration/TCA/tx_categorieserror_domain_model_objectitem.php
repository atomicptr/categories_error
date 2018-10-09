<?php

return [
    "ctrl" => [
        "title" => "Object Item",
        "label" => "title"
    ],
    "types" => [
        "0" => [
            "showitem" => "--div--;Object Item, title, categories"
        ]
    ],
    "columns" => [
        "title" => [
            "exclude" => false,
            "label" => "Title",
            "config" => [
                "type" => "input",
                "size" => 255,
                "eval" => "trim,required"
            ]
        ]
    ]
];
