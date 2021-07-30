<?php 

require_once 'views/View.php';

class ControllerHome{

	private $view;

	public function __construct($url)
	{

		if (isset($url) && count($url) > 1) {
			throw new Exception("Malheureusement cette page est introuvable.");	
		}

		else {
			$this->news();
		}
	}

	private function news()
	{
		$this->view = new View('Home');
		$this->view->generate(array('news' => 'news'));
	}

}