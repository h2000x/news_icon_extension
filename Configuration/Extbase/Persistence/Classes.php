<?php

return [
    \GeorgRinger\News\Domain\Model\News::class => [
        'subclasses' => [
            0 => \Justabunchof\NewsIconExtension\Domain\Model\NewsDefault::class
        ]
    ],

    \Justabunchof\NewsIconExtension\Domain\Model\NewsDefault::class => [
        'tableName' => 'tx_news_domain_model_news',
        'recordType' => 0,
    ]

// ...
];