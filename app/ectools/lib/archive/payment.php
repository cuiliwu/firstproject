<?php


class ectools_archive_payment extends archive_finder_abstract implements archive_finder_interface{

    public function finder(){
        return array(
            'model' => 'ectools_mdl_archive_payments',
            'params' => array(
                'title'=>app::get('b2c')->_('归档收款单'),
                'use_buildin_recycle'=>false,
                'allow_detail_popup'=>true,
                'use_view_tab'=>true,
            ),
        );
    }

}
