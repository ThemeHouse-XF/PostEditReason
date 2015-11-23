<?php

/**
 *
 * @see XenForo_DataWriter_DiscussionMessage_Post
 */
class ThemeHouse_PostEditReason_Extend_XenForo_DataWriter_DiscussionMessage_Post extends XFCP_ThemeHouse_PostEditReason_Extend_XenForo_DataWriter_DiscussionMessage_Post {
	
	/**
	 *
	 * @see XenForo_DataWriter_DiscussionMessage_Post::_getFields()
	 */
	protected function _getFields() {
		$fields = parent::_getFields ();
		$fields ['xf_post'] ['post_edit_reason_th'] = array (
				'type' => self::TYPE_STRING,
				'max_length' => 255,
				'default' => '' 
		);
		return $fields;
	} /* END _getFields */
	
	/**
	 *
	 * @see XenForo_DataWriter_DiscussionMessage_Post::_messagePreSave()
	 */
	protected function _messagePreSave() {
		if (isset ( $GLOBALS ['XenForo_ControllerPublic_Post'] )) {
			/* @var $controller XenForo_ControllerPublic_Post */
			$controller = $GLOBALS ['XenForo_ControllerPublic_Post'];
			if ($this->isChanged ( 'last_edit_date' )) {
				$this->set ( 'post_edit_reason_th', $controller->getInput ()->filterSingle ( 'post_edit_reason_th', XenForo_Input::STRING ) );
			}
		}
		return parent::_messagePreSave ();
	} /* END _messagePreSave */
}