<?php
Common::$config['raven'] =  array(
	'mail' => array(
		'host' =>'',
		'user' => '',
		'pass' => ''
	),
	'database' => array(
		'host' => '',
		'user' => '',
		'pass' => '',
		'db'   => ''
	)
);
Common::$config['cube_disabled'] = true;
Common::$config['status'] = array(
	'shaker' => array(
		'ssh' => array(
			'host' => '',
			'user' => '',
			'pass' => ''
		),
		'db' => array(
			'host' => '',
			'user' => '',
			'pass' => ''
		)
	),
	'cube' => array(
		'ssh' => array(
			'host' => '',
			'user' => '',
			'pass' => ''
		),
		'db' => array(
			'host' => '',
			'user' => '',
			'pass' => ''
		)

	)
);
Common::$config['host'] = 'dev';
Common::$conig['smarty_streets'] = array(
	'auth_token' => '',
	'auth_id' => '',
);
Common::$config['whs_folder'] = array(
);
Common::$config['database'] = array(
	//Set below
	'databaseServer' => 'localhost',
	'databaseUser' => 'root',
	'databasePassword' => 'test',
	'databaseName' => 'salt',
	'master' => array(
		//Set below
		'databaseServer' => 'localhost',
		'databaseUser' => 'root',
		'databasePassword' => 'test',
		'databaseName' => 'salt'
	),
	//Connection to slave that mirrors salt dbs
	'slave' => array(
		'databaseServer' => 'localhost',
		'databaseUser' => 'root',
		'databasePassword' => 'test',
		'databaseName' => 'salt'
	)
);
Common::$config['documents_folder'] = '/var/www/salt/documents/';
common::$config['hooksDir'] ='var/www/salt/documents/Hooks/db/';

Common::$config['rejuggle_lock_slave'] = false;