<?php
class Banner_model  extends CI_Model  {

	function __construct()
    {
        parent::__construct();
    }

    public function get_banners($cond = null, $order = array(), $limit = null)
    {
    	try {

    		if($cond) $this->db->where($cond);

		    if($order) $this->db->order_by($order["campo"], $order["ordem"]);
		    if($limit) $result =  $this->db->get('banner', $limit)->result();
		    else $result =  $this->db->get('banner')->result();
		    			    
    	} catch (Exception $e) {
    		echo 'Error: ' . $e->getCode . ' | ' . $e->getMessage();
    		return false;
    	}
    	
    	if($result)
    		return $result;
    }
}