<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'urlManager' => array(
            'enablePrettyUrl' => true,
             'rules'=> array(
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
             ),
        ), 
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'tsTfyaad3TaJZMX19rjMMLqFIc7PtKKP',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\Usuarios',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
		'formatter' => [
			'class' => 'yii\i18n\Formatter',
			'dateFormat' => 'dd-mm-yyyy',
			'decimalSeparator' => ',',
			'thousandSeparator' => '.',
			'currencyCode' => 'USD',
			'nullDisplay' => '',          
		],
        'db' => require(__DIR__ . '/db.php'),
 
    ],
    'params' => $params,
	'language' => 'es',
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    //$config['bootstrap'][] = 'debug';
    //$config['modules']['debug'] = [
    //    'class' => 'yii\debug\Module',
    //];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
	$config['modules']['gridview'] = array(
                                        'class' => '\kartik\grid\Module',
                                            );
    $config['modules']['reportico'] = array(
            'class' => 'reportico\reportico\Module' ,
            'controllerMap' => [
                            'reportico' => 'reportico\reportico\controllers\ReporticoController',
                            'mode' => 'reportico\reportico\controllers\ModeController',
                            'ajax' => 'reportico\reportico\controllers\AjaxController',
                        ]
            );
}

return $config;
