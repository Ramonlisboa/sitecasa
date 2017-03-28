<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portal extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		//$this->load->database();
		$this->load->view('site/head.php');
		$this->load->model('Postagem_model','postagem_model',true);
		$this->load->model('Menu_model','menu_model',true);
		$menu['aMenu'] = $this->menu_model->gera_menu();
		$this->load->view('site/menu.php',$menu);

	}
	
	public function index()
	{
		$output['aNoticias'] = $this->postagem_model->get_postagens('categoria_id = 1 AND publicado = 1 AND flimg = 1', array('campo'=>'dt_cadastro','ordem' => 'asc'), 6); 
		$this->load->view('index', $output);
	}
	
	public function ver($alias)
	{
		$menu['aMenu'] = array();
		if($alias){
			$cond = "alias = '{$alias}'";
			$menu['aMenu'] = $this->menu_model->get_menus($cond);
		}
		$this->load->view('ver',$menu);
	}
	
	public function contato()
	{
		$this->load->view('contato');
	}
	
	public function adote_um_autista()
	{
		$this->load->view('adote');
	}
}
