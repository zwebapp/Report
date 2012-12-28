<?php

namespace Fuel\Migrations;

class Create_lookup_names
{
	public function up()
	{
		\DBUtil::create_table('lookup_names', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'lookups_id' => array('constraint' => 11, 'type' => 'int'),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('lookup_names');
	}
}