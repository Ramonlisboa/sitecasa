<?php
class Postagem_model  extends CI_Model  {

	function __construct()
    {
        parent::__construct();
    }

    public function get_postagens($cond = null, $order = array(), $limit = null)
    {
    	$select = "categoria_id, c.nome as categoria, p.titulo as titulo, alias, conteudo, publicado, img_destaque";
    	try {
    		
			$this->db
				->select($select)
				->join('categoria c','c.id = p.categoria_id');

    		if($cond) $this->db->where($cond);

		    if($order) $this->db->order_by($order["campo"], $order["ordem"]);
		    if($limit) $result =  $this->db->get('postagem p', $limit)->result();
		    else $result =  $this->db->get('postagem p')->result();
		    			    
    	} catch (Exception $e) {
    		echo 'Error: ' . $e->getCode . ' | ' . $e->getMessage();
    		return false;
    	}
    	
    	if($result)
    		return $result;
    }

    public function get_postagem_by_alias($cond)
    {
        try {
            $this->db->select('*');
            if($cond) $this->db->where($cond);
            $result =  $this->db->get('postagem')->result();
                            
        } catch (Exception $e) {
            echo 'Error: ' . $e->getCode . ' | ' . $e->getMessage();
            return false;
        }
        
        if($result)
            return $result;
    }
}