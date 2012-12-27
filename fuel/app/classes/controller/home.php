<?php

class Controller_Home extends Controller_Template
{

	public function action_index()
	{
		$this->template->title = 'Home &raquo; Index';
		$this->template->content = View::forge('home/index');
	}

}
