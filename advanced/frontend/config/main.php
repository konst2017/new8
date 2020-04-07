<?php
use frontend\cart\storage\SessionStorage;

Yii::$container->setSingleton('frontend\cart\ShoppingCart');

Yii::$container->set('frontend\cart\storage\StorageInterface', function() {
    return new SessionStorage(Yii::$app->session, 'primary-cart');
});
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
'defaultRoute' => 'site/index',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
			 'baseUrl'=> '/advanced' 
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
		'errorHandler' => [

	            'errorAction' => 'site/error',

	            'maxSourceLines' => 20,

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
//'index' => 'site/index',
	'home' => 'website/index', 
	//<alias:about>' => 'website/page',
//	'page/<alias>' => 'website/page',
 'post/<alias:[-a-z]+>1' => 'post/view',
 '(posts | archive)' => 'post/index',
 '(posts | archive)/<order:(DESCIASC)>' => 'post/index', 
 'sayhello/<name>' => 'post/hello'
	
            ],
        ],
       
    ],
    'params' => $params,
];
