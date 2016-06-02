<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{

	public function dashboard()
	{
		$this->show('admin/dashboard');
	}

}