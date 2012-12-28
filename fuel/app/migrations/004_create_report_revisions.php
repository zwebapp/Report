<?php

namespace Fuel\Migrations;

class Create_report_revisions
{
	public function up()
	{
		\DBUtil::create_table('report_revisions', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'reports_id' => array('constraint' => 11, 'type' => 'int'),
			'contents' => array('type' => 'text'),
			'date_published' => array('type' => 'datetime'),
			'date_modified' => array('type' => 'datetime'),
			'is_current' => array('type' => 'boolean'),
			'is_draft' => array('type' => 'boolean'),
			'revision_url' => array('type' => 'text'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('report_revisions');
	}
}