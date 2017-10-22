<?php

 
class syscache_service extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
          $this->libray = new base_syscache_service();
    }

    public function testGetData(){

        var_dump($this->libray->get_data());
    }

}
