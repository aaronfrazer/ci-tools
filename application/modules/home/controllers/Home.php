<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller
{

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$data = 15;

		$this -> blade
			-> set('data', $data)
			-> render('home');
	}
}
