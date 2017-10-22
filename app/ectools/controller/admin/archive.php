<?php


class ectools_ctl_admin_archive extends desktop_controller{

    var $workground = 'ectools.wrokground.order';


    function payment(){
        kernel::single('ectools_archive_payment')->set_params($_POST)->display();

    }

    function refund(){
        kernel::single('ectools_archive_refund')->set_params($_POST)->display();
    }

}
