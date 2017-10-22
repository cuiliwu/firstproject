<?php


interface desktop_interface_passportpresent{
    //在登录页面时，验证码之后调用
    public function handle(&$object);
}
