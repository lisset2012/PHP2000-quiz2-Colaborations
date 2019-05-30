<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {

        $colabs = Colaborations::find(['order' => 'id','limit' => 1]);
        
        $this->view->colab = $colabs;
    }

     
    
	
}