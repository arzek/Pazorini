<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],

    'controllerNamespace' => 'frontend\controllers',
    'modules' => ['gii' => [
    'class' => 'yii\gii\Module',
    'allowedIPs' => ['*']
    ]],
    'components' => [

        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => ''
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'ajax/set-img-comment/<id:\d+>' => 'ajax/set_img_comment',

                'ajax/message' => 'ajax/message',


                'business' => 'site/business',
                'offers' => 'site/offers',


                'offer/<id:\d+>' => 'site/offer',

                'final/<id:\d+>' => 'site/final',



                'contacts' => 'site/contacts',
                'about' => 'site/about',
                'success' => 'site/success'

            ],
        ],

    ],
    'params' => $params,
];
