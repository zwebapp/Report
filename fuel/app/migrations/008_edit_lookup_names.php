<?php

namespace Fuel\Migrations;

class Edit_lookup_names
{
	public function up()
	{

		\DBUtil::drop_fields('lookup_names', 'lookups_id');
		\DBUtil::add_fields('lookup_names', array(
    	'lookup_id' => array('constraint' => 11, 'type' => 'int')
		));
	}

	public function down()
	{
		\DBUtil::drop_fields('lookup_names', 'lookup_id');
		\DBUtil::add_fields('lookup_names', array(
    	'lookups_id' => array('constraint' => 11, 'type' => 'int')
		));
	}
}