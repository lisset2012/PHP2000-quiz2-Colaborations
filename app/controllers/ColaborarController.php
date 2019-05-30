<?php

use Phalcon\Mvc\Controller;

class ColaborarController extends Controller
{
    public function indexAction()
    {
        $ip = $_SERVER['REMOTE_ADDR'];

        // get variable colaborac via POST
		$colaborac = $this->request->get('colaboraciones');

		// validate no fields are empty
		if(empty($ip) || empty($colaborac)) {
			die("You need to fill of the required fields");
        }

        // save the new colaboration in the DB
		$colaboration = new Colaborations();
        $colaboration->ip = $ip;
		$colaboration->colaborac = $colaborac;
		$colaboration->save();

		$this->response->redirect('index');
    }
}