<?php

class ThemeHouse_PostEditReason_Install_Controller extends ThemeHouse_Install
{
    
    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/post-edit-reason.3687/';
    
    protected $_minVersionId = 1020000;
    
    protected function _getTableChanges()
    {
    	return array(
    			'xf_post' => array(
    			    'post_edit_reason_th' => 'VARCHAR(255) NOT NULL DEFAULT \'\'', /* END 'post_edit_reason_th' */
    			), /* END 'xf_post' */
    	);
    } /* END _getTableChanges */
}