<?php

class Model_Report_Revision extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'reports_id',
		'contents',
		'date_published',
		'date_modified',
		'is_current',
		'is_draft',
		'revision_url'
	);

}
