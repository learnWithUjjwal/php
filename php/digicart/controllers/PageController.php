<?php
require_once('AppController.php');
class PageController extends AppController{
	public function index(){
		return parent::view('layouts/master.view.php', ['dc_content' => 'Content']);
	}
	public function about(){
		return parent::view('layouts/master.view.php', ['dc_content' => 'About']);
	}
}