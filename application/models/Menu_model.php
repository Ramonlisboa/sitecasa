<?php
class Menu_model  extends CI_Model  {

	function __construct()
    {
        parent::__construct();
    }

    public function get_menus($cond = null, $order = array())
    {
    	$select = "m.id as id_menu,m.estrutura as estrutura, m.nome as nome, m.alias as alias, tp.nome as tipo_menu, m.conteudo as conteudo, m.flstatus as flstatus";
    	try {
    		
			$this->db
				->select($select)
				->join('tipo_menu tp','tp.id = m.tipo_menu_id');

    		if($cond) $this->db->where($cond);

		    if($order) $this->db->order_by($order["campo"], $order["ordem"]);
    		
    		$result =  $this->db->get('menu m')->result();	
    	} catch (Exception $e) {
    		echo 'Error: ' . $e->getCode . ' | ' . $e->getMessage();
    		return false;
    	}
    	
    	if($result)
    		return $result;
    }

    public function gera_menu($objarr = null)
    {
    	$hMenu = "";
    	$urlMenu = site_url('portal/');
    	$arrMenus = array();

    		//print_r($objarr); exit();
    	if($objarr)
    		$arrMenus = $objarr;
    	 else
    		$arrMenus = $this->get_menus("m.flstatus = 1 and estrutura not like '%.%'", array('campo' => 'estrutura','ordem' => 'asc'));

    	foreach ($arrMenus as $o) {
    		$class="";
    		if($o->estrutura == '01'){
    			$class = 'class="active"';
    		}

    		/****** SUBMENU ******/

    		if($o->tipo_menu == 'Submenu' ){
    			$hMenu .= "<li class='dropdown'>";
    			$hMenu .= "<a href='{$urlMenu}/{$o->alias}' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>{$o->nome}</a>";
    			$hMenu .= '<ul class="dropdown-menu" role="menu" style="top: 75px;">';
    			$hMenu .= $this->gera_menu($this->get_menus("estrutura like '{$o->estrutura}%' AND m.id <> {$o->id_menu} AND m.flstatus = 1",array('campo' => 'estrutura','ordem' => 'asc')));
    			$hMenu .= "</ul>";
    		} else 
				$hMenu .= "<li {$class}>";

    		/****** CONTEUDO ******/

			if($o->tipo_menu == 'Conteudo' ){
    			$hMenu .= "<a href='{$urlMenu}/ver/{$o->alias}'>{$o->nome}</a>";
    		}

    		/****** LINK INTERNO ******/

			if($o->tipo_menu == 'Link Int' ){
    			$hMenu .= "<a href='{$urlMenu}/{$o->alias}'>{$o->nome}</a>";
    		}

    		/****** LINK INTERNO ******/

			if($o->tipo_menu == 'Portal' ){
    			$hMenu .= "<a href='{$urlMenu}/'>{$o->nome}</a>";
    		}

    		$hMenu .= "</li>";

    	}

    	return $hMenu;
    }
}