<?php

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */

class AppController extends Controller 
{

	public $components = array(
		'Session', 
		'Auth' => array(
			'loginRedirect' => array('controller'=>'posts', 'action' => 'index'),
			'logoutRedirect' => array('controller'=>'pages', 'action' => 'home', 'display')
		)
	);

	
	public function beforeRender()
	{
		parent::beforeRender();
		$this->Auth->allow(array('login'));
		$this->layout = 'custom';
	}

}
