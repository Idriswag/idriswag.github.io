<?php 

require_once 'inc/inc.php';
require_once 'views/View.php'; 

class Router{

	private $ctrl;
	private $view;

	public function routerReq()
	{
		global $db;

		try{
			
			spl_autoload_register(function($class)
			{
				require_once 'models/'.$class.'.php';
			});

			$url[] = "";
			$get_flash_content_names = array("settings", "messages", "chat", "repost", "change_session", "account", "update", "referal_link", "mkmowil_help", "edit");


			if (isset($_GET['url'])) {
				
				$url = explode('/', $_GET['url'], FILTER_SANITIZE_URL);

                $url = explode('/', $_GET['url'], FILTER_SANITIZE_URL);
				$controller      = ucfirst(strtolower($url[0]));
				$controllerClass = 'Controller'.$controller;
				$controllerFile  = 'controllers/'.$controllerClass.'.php';

				if (file_exists($controllerFile)) {

					require_once $controllerFile;
					$this->ctrl = new $controllerClass($url);

				}

				else{

					throw new Exception("Malheureusement cette page n'est pas disponible.");				
				}
			
			} 

			else {
				require_once 'controllers/ControllerHome.php';
				$this->ctrl = new controllerHome($url);
			}

		}

		catch(Exception $e){
			$errorMsg = $e->getMessage();
			$this->view = new View('Error');
		    $this->view->generate(array('errorMsg' => $errorMsg));
		}
	}
}