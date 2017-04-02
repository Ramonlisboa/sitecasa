<?php
class Galeria_model  extends CI_Model  {

	function __construct()
    {
        parent::__construct();
    }

    public function get_galerias($cond = null, $order = array(), $limit = null)
    {
    	try {

    		if($cond) $this->db->where($cond);

		    if($order) $this->db->order_by($order["campo"], $order["ordem"]);
		    if($limit) $result =  $this->db->get('galerias', $limit)->result();
		    else $result =  $this->db->get('galerias')->result();
		    			    
    	} catch (Exception $e) {
    		echo 'Error: ' . $e->getCode . ' | ' . $e->getMessage();
    		return false;
    	}
    	
    	if($result)
    		return $result;
    }

    public function get_fotos($cond = null, $order = array(), $limit = null)
    {
        $select = "f.galeria_id as galeria_id, g.nome  as nome_galeria, f.nome as nome_foto, descricao, foto, f.dt_cadastro as dt_cadastro, f.publicada as publicada";
        try {

            if($cond) $this->db->select($select)
                                ->join('galerias g','g.id = f.galeria_id')
                                ->where($cond);

            if($order) $this->db->order_by($order["campo"], $order["ordem"]);
            if($limit) $result =  $this->db->get('fotos f', $limit)->result();
            else $result =  $this->db->get('fotos f')->result();
                            
        } catch (Exception $e) {
            echo 'Error: ' . $e->getCode . ' | ' . $e->getMessage();
            return false;
        }
        
        if($result)
            return $result;
    }
}