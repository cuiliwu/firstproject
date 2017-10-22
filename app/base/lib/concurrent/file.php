<?php

 
class  base_concurrent_file{

    public function status($id){
        $file_name=md5($id);
        $this->path=substr($file_name,0,2);
        $this->check_dir();
        $file=DATA_DIR.'/concurrent/'.$this->path.'/'.$file_name.'.php';

        if(!is_file($file)){
            file_put_contents($file, '');
        }
        $this->fp = fopen($file, "w+");
    }

    public function check_flock(){
        if(flock($this->fp,LOCK_EX | LOCK_NB)){
            return ture;
        }else{
            return false;
        }
    }

    public function unlock(){
        flock($this->fp,LOCK_UN);
    }

    public function close_lock(){

        fclose($this->fp);
    }

    private function check_dir()
    {
        if(!is_dir(DATA_DIR.'/concurrent/'.$this->path)){
            utils::mkdir_p(DATA_DIR.'/concurrent/'.$this->path);
        }
    }//End Function

}
