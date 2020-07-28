<?php
return [
    'cacheTimestamp' => 1595949757,
    'database' => [
        'driver' => 'pdo_mysql',
        'host' => 'particulardb.mysql.database.azure.com',
        'port' => '',
        'charset' => 'utf8mb4',
        'dbname' => 'particulardb',
        'user' => 'Appledev@particulardb',
        'password' => 'T1mber18!'
    ],
    'useCache' => true,
    'recordsPerPage' => 20,
    'recordsPerPageSmall' => 5,
    'applicationName' => 'EspoCRM',
    'version' => '5.9.3',
    'timeZone' => 'UTC',
    'dateFormat' => 'DD.MM.YYYY',
    'timeFormat' => 'HH:mm',
    'weekStart' => 0,
    'thousandSeparator' => ',',
    'decimalMark' => '.',
    'exportDelimiter' => ',',
    'currencyList' => [
        0 => 'USD'
    ],
    'defaultCurrency' => 'USD',
    'baseCurrency' => 'USD',
    'currencyRates' => [
        
    ],
    'outboundEmailIsShared' => true,
    'outboundEmailFromName' => 'EspoCRM',
    'outboundEmailFromAddress' => '',
    'smtpServer' => '',
    'smtpPort' => 587,
    'smtpAuth' => false,
    'smtpSecurity' => 'TLS',
    'smtpUsername' => '',
    'smtpPassword' => '',
    'language' => 'en_US',
    'logger' => [
        'path' => 'data/logs/espo.log',
        'level' => 'WARNING',
        'rotation' => true,
        'maxFileNumber' => 30
    ],
    'authenticationMethod' => 'Espo',
    'globalSearchEntityList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Lead',
        3 => 'Opportunity'
    ],
    'tabList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Lead',
        3 => 'Opportunity',
        4 => 'Case',
        5 => 'Email',
        6 => 'Calendar',
        7 => 'Meeting',
        8 => 'Call',
        9 => 'Task',
        10 => '_delimiter_',
        11 => 'Document',
        12 => 'Campaign',
        13 => 'KnowledgeBaseArticle',
        14 => 'Stream',
        15 => 'User'
    ],
    'quickCreateList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Lead',
        3 => 'Opportunity',
        4 => 'Meeting',
        5 => 'Call',
        6 => 'Task',
        7 => 'Case',
        8 => 'Email'
    ],
    'exportDisabled' => false,
    'adminNotifications' => true,
    'adminNotificationsNewVersion' => true,
    'adminNotificationsCronIsNotConfigured' => true,
    'adminNotificationsNewExtensionVersion' => true,
    'assignmentEmailNotifications' => false,
    'assignmentEmailNotificationsEntityList' => [
        0 => 'Lead',
        1 => 'Opportunity',
        2 => 'Task',
        3 => 'Case'
    ],
    'assignmentNotificationsEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Task',
        3 => 'Email'
    ],
    'portalStreamEmailNotifications' => true,
    'streamEmailNotificationsEntityList' => [
        0 => 'Case'
    ],
    'streamEmailNotificationsTypeList' => [
        0 => 'Post',
        1 => 'Status',
        2 => 'EmailReceived'
    ],
    'emailNotificationsDelay' => 30,
    'emailMessageMaxSize' => 10,
    'notificationsCheckInterval' => 10,
    'maxEmailAccountCount' => 2,
    'followCreatedEntities' => false,
    'b2cMode' => false,
    'restrictedMode' => false,
    'theme' => 'HazyblueVertical',
    'massEmailMaxPerHourCount' => 100,
    'massEmailVerp' => false,
    'personalEmailMaxPortionSize' => 50,
    'inboundEmailMaxPortionSize' => 50,
    'emailAddressLookupEntityTypeList' => [
        0 => 'User',
        1 => 'Contact',
        2 => 'Lead',
        3 => 'Account'
    ],
    'authTokenLifetime' => 0,
    'authTokenMaxIdleTime' => 120,
    'userNameRegularExpression' => '[^a-z0-9\\-@_\\.\\s]',
    'addressFormat' => 1,
    'displayListViewRecordCount' => true,
    'dashboardLayout' => [
        0 => (object) [
            'name' => 'My Espo',
            'layout' => [
                0 => (object) [
                    'id' => 'default-activities',
                    'name' => 'Activities',
                    'x' => 2,
                    'y' => 2,
                    'width' => 2,
                    'height' => 4
                ],
                1 => (object) [
                    'id' => 'default-stream',
                    'name' => 'Stream',
                    'x' => 0,
                    'y' => 0,
                    'width' => 2,
                    'height' => 4
                ]
            ]
        ]
    ],
    'calendarEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Task'
    ],
    'activitiesEntityList' => [
        0 => 'Meeting',
        1 => 'Call'
    ],
    'historyEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Email'
    ],
    'busyRangesEntityList' => [
        0 => 'Meeting',
        1 => 'Call'
    ],
    'cleanupJobPeriod' => '1 month',
    'cleanupActionHistoryPeriod' => '15 days',
    'cleanupAuthTokenPeriod' => '1 month',
    'currencyFormat' => 2,
    'currencyDecimalPlaces' => 2,
    'aclStrictMode' => true,
    'aclAllowDeleteCreated' => false,
    'aclAllowDeleteCreatedThresholdPeriod' => '24 hours',
    'inlineAttachmentUploadMaxSize' => 20,
    'textFilterUseContainsForVarchar' => false,
    'tabColorsDisabled' => false,
    'massPrintPdfMaxCount' => 50,
    'emailKeepParentTeamsEntityList' => [
        0 => 'Case'
    ],
    'streamEmailWithContentEntityTypeList' => [
        0 => 'Case'
    ],
    'recordListMaxSizeLimit' => 200,
    'noteDeleteThresholdPeriod' => '1 month',
    'noteEditThresholdPeriod' => '7 days',
    'emailForceUseExternalClient' => false,
    'useWebSocket' => false,
    'auth2FAMethodList' => [
        0 => 'Totp'
    ],
    'personNameFormat' => 'firstLast',
    'newNotificationCountInTitle' => false,
    'isInstalled' => true,
    'microtime' => 1595949757.042981,
    'siteUrl' => 'http://localhost/ParticularCRM',
    'passwordSalt' => '20f927150abb4b99',
    'cryptKey' => '8bb9afe083c554c907b2e5a7e24f1d28',
    'hashSecretKey' => '370a1dbab8816a41cbd905741f302853',
    'fullTextSearchMinLength' => 4,
    'actualDatabaseType' => 'mysql',
    'actualDatabaseVersion' => '5.7.29'
];
?>