<?php
class AppController{
	protected function view($view_path, $data = []){
		ob_start();
		extract($data);
		require_once(DOCUMENT_ROOT.'/views/'.$view_path);		
		return ob_get_contents();
	}
}