<?php

class Model_Report extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'name',
		'is_active'
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);
}
