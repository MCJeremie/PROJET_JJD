<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationManager;

class AdminController extends Controller
{

	public function dashboard()
	{
		$authent = new AuthentificationManager();

		$loggedUser = $authent->getLoggedUser();

		$this->show('admin/dashboard', array('loggedUser' => $loggedUser));
	}

}