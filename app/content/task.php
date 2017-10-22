<?php

 

class content_task 
{
    function post_install()
    {
        logger::info('Initial content');
        kernel::single('base_initial', 'content')->init();
    }//End Function
}//End Class
