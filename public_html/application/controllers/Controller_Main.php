<?php

class Controller_Main extends Controller
{
	public $model;
	public function __construct()
	{
		parent::__construct();
		require 'application/models/Model_Main.php';
		$this->model = new Model_Main();
	}

	public function action_index(){
		$this->view->generate('main');
	}
	public function action_contacts(){
		$data['contacts'] = $this->model->getContacts();
		$this->view->generate('contacts',$data);
	}
}