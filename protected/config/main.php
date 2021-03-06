<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
//Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',

	'name'=>'SISTEMA PRESUPUESTARIO 2014',
    'language'=>'es',
    'theme'=>'bootstrap',

	// preloading 'log' component
	'preload'=>array('log','ids'),
    
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'passisalud',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths'=> array('ext.gii.generators'),
            //'generatorPaths'=> array('bootstrap.gii'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
                    'showScriptName'=>false,
                    'caseSensitive'=>true,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
			'tablePrefix'=>'',
			'connectionString' => 'pgsql:host=localhost;port=5432;dbname=poa_salud',
			'username'=>'usrpoa',
			'password'=>'passpoasis',
			'charset'=>'UTF8',
		),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
        
        'request'=>array(
            'enableCsrfValidation'=>true,
            'enableCookieValidation'=>true,
        ),
        
        'ids' => array(
            'class' => 'application.components.ids.CPhpIds',
            'genericMessage' => 'Alerta de Seguridad...',
        ),
        
        /*'bootstrap' => array(
            'class' => 'bootstrap.components.Bootstrap',
        ),*/
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
        'permiso_acceso'=>'$user->id != 0 && $user->tipoUsuario == 1',
	),
);