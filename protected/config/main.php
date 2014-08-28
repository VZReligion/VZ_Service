<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
'language'=>'zh-cn',
'name'=>'VZ_basesite',
'theme'=>'VZ_Default', 
'defaultController'=>'Van',
// autoloading model and component classes
'import'=>array(
	'application.models.*',
	'application.models.User.*',
	'application.components.*',
	'application.components.Vanbase.*',
	'application.components.User.*',
	'application.extensions.*',
	),
'modules'=>array(
	// uncomment the following to enable the Gii tool	
	'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'594211',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			),	
		'VUser',
		),
// application components
'components'=>array(
	'user'=>array( //user
			'class'=>'VZ_Userinfo',//Use VZ_Userinfo class  is  save  userinfo
			'allowAutoLogin'=>true,//
			'stateKeyPrefix'=>'VZU_', //session     _Prefix
			),
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				),
			),
		
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=vzdb_mysql_basesite',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'zzzzzz',
			'charset' => 'utf8',
			),
		
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
		),

// application-level parameters that can be accessed
// using Yii::app()->params['paramName']
'params'=>array(
	// this is used in contact page
	'adminEmail'=>'webmaster@example.com',
	//option_timeout
	'option_timeout'=>1000,
	),
);