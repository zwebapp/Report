<?php

class Controller_Security extends Controller_Template
{

	public function action_login()
	{
		$this->template->title = 'Security &raquo; Login';
		$this->template->content = View::forge('security/login');
	}

	public function action_index()
	{
		$this->template->title = 'Security &raquo; Index';
		$this->template->content = View::forge('security/index');
	}

}
