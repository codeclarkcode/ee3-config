<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

$config['app_version'] = '3.x.x';
$config['encryption_key'] = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'hostname',
		'database' => 'database',
		'username' => 'username',
		'password' => 'password',
		'dbprefix' => 'exp_'
	),
);

// EOF
