<?php
#harus di controller CI
function tesmemcached()
	{
		$this->load->library('memcached_library');		
        $_key = 'l6_pilkada';
		//$this->memcached_library->delete($_key);
        $result = $this->memcached_library->get($_key);
		if(!empty($result))
			print_r($result);
	}
?>