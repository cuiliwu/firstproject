<?php

 
class syscache_setting extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
          $this->libray = new base_syscache_setting();
    }

    public function testGetData(){

        var_dump($this->libray->get_data());
    }

    public function testGet(){

        echo 999;
        var_dump(syscache::instance('setting')->get('setting/site-sitemaps'));
        
    }

}
