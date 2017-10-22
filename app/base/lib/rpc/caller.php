<?php


class base_rpc_caller{

    var $timeout = 10;

    function __construct(&$app,$node_id,$version){
        $this->network_id = $node_id;
        $this->app = $app;
		$this->api_request_version = $version;
    }


    private function get_url($node){
        $row = app::get('base')->model('network')->getlist('node_url,node_api', array('node_id'=>$this->network_id));
        if($row){
            if(substr($row[0]['node_url'],-1,1)!='/'){
                $row[0]['node_url'] = $row[0]['node_url'].'/';
            }
            if($row[0]['node_api']{0}=='/'){
                $row[0]['node_api'] = substr($row[0]['node_api'],1);
            }
            $url = $row[0]['node_url'].$row[0]['node_api'];
        }

        return $url;
    }

    public function call($method,$params,$rpc_id=null,$gzip=false){
        return true;
    }

    public function set_callback($callback_class,$callback_method,$callback_params=null){
        $this->callback_class = $callback_class;
        $this->callback_method = $callback_method;
        $this->callback_params = $callback_params;
        return $this;
    }

    public function set_timeout($timeout){
        $this->timeout = $timeout;
        return $this;
    }

	public function set_api_version($version){
		$this->api_request_version = $version;
	}

    private function api_version($method){ return $this->api_request_version; }

}
