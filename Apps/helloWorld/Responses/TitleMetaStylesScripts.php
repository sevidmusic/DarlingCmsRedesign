<?php

$appComponentsFactory->buildGlobalResponse(
    'GlobalResponse',
    0,
    $appComponentsFactory->buildStandardUITemplate(
        'StandardUITemplate',
        'Components',
        0,
        $appComponentsFactory->buildDynamicOutputComponent(
            'DynamicOutputComponent',
            'Components',
            0,
            'helloWorld',
            'Duplicate.php'
        ),
    ),
    $appComponentsFactory->buildDynamicOutputComponent(
        'Title',
        'Components',
        0,
        'helloWorld',
        'Title.php'
    ),
    $appComponentsFactory->buildDynamicOutputComponent(
        'Meta',
        'Components',
        1,
        'helloWorld',
        'Meta.html'
    ),
    $appComponentsFactory->buildDynamicOutputComponent(
        'Meta',
        'Components',
        1,
        'helloWorld',
        'Stylesheets.php'
    ),
    $appComponentsFactory->buildDynamicOutputComponent(
        'Scripts',
        'Components',
        1,
        'helloWorld',
        'Scripts.php'
    ),
);
