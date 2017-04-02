<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portal extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		//$this->load->database();
		$this->load->view('site/head.php');
		$this->load->model('Postagem_model','postagem_model',true);
		$this->load->model('Menu_model','menu_model',true);
		$this->load->model('Banner_model','banner_model',true);
		$this->load->model('Galeria_model','galeria_model',true);
		$menu['aMenu'] = $this->menu_model->gera_menu();
		$this->load->view('site/menu.php',$menu);

	}
	
	public function index()
	{
		$output['aNoticias'] = $this->postagem_model->get_postagens('categoria_id = 1 AND publicado = 1 AND flimg = 1', array('campo'=>'dt_cadastro','ordem' => 'desc'), 6); 
		$output['aBanner'] = $this->banner_model->get_banners('publicado = 1',array('campo'=>'dt_cadastro','ordem' => 'desc'));
		$this->load->view('index', $output);
	}
	
	public function ver($alias)
	{
		$menu['aContent'] = array();
		if($alias){
			$cond = "alias = '{$alias}'";
			$menu['aContent'] = $this->menu_model->get_menus($cond);
		}
		$this->load->view('ver',$menu);
	}

	public function noticias($alias)
	{
		$noticias['aContent'] = array();
		if($alias){
			$cond = "alias = '{$alias}'";
			$noticias['aContent'] = $this->postagem_model->get_postagem_by_alias($cond);
		}
		$this->load->view('noticia',$noticias);
	}
	
	public function contato()
	{
		$this->load->view('contato');
	}
	
	public function adote_um_autista()
	{
		$this->load->view('adote');
	}
	
	public function galeria_de_fotos()
	{
		$output['aFotos'] = array();
		$output['id_galerias'] = null;
		$post = $this->input->post();
		//print_r($post['id_galeria']); exit();
		$output['aGalerias'] = $this->galeria_model->get_galerias();
		if($post){
			$output['id_galerias'] = $post['id_galeria'];
			$output['aFotos'] = $this->galeria_model->get_fotos('galeria_id = ' . $post['id_galeria'], array('campo'=>'dt_cadastro','ordem' => 'desc'));
		}
		$this->load->view('galeria_de_fotos',$output);
	}
}
