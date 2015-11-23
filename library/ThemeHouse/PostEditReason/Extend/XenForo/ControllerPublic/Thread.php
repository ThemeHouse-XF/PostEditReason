<?php

/**
 *
 * @see XenForo_ControllerPublic_Thread
 */
class ThemeHouse_PostEditReason_Extend_XenForo_ControllerPublic_Thread extends XFCP_ThemeHouse_PostEditReason_Extend_XenForo_ControllerPublic_Thread
{

    /**
     *
     * @see XenForo_ControllerPublic_Thread::actionIndex()
     */
    public function actionIndex()
    {
        $response = parent::actionIndex();
        if ($response instanceof XenForo_ControllerResponse_View && ! empty($response->params['posts'])) {
            $options = XenForo_Application::get('options');
            $canViewPostEditNotice = false;
            if (! XenForo_Visitor::getInstance()->isMemberOf($options->th_editPostReason_excludedUserGroups)) {
                $response->params['canViewPostEditNotice'] = true;
                $canViewPostEditNotice = true;
            }
            if ($options->th_postEditReason_showUserLink && $canViewPostEditNotice) {
                $response->params['posts'] = $this->_prepareEditedPosts($response->params['posts']);
            }
        }
        return $response;
    } /* END actionIndex */

    /**
     *
     * @see XenForo_ControllerPublic_Thread::actionShowPosts()
     */
    public function actionShowPosts()
    {
        $response = parent::actionShowPosts();
        if ($response instanceof XenForo_ControllerResponse_View && ! empty($response->params['posts'])) {
            $options = XenForo_Application::get('options');
            $canViewPostEditNotice = false;
            if (! XenForo_Visitor::getInstance()->isMemberOf($options->th_editPostReason_excludedUserGroups)) {
                $response->params['canViewPostEditNotice'] = true;
                $canViewPostEditNotice = true;
            }
            if ($options->th_postEditReason_showUserLink && $canViewPostEditNotice) {
                $response->params['posts'] = $this->_prepareEditedPosts($response->params['posts']);
            }
        }
        return $response;
    } /* END actionShowPosts */

    protected function _prepareEditedPosts(array $posts)
    {
        $users = array();
        foreach ($posts as &$post) {
            if ($post['last_edit_user_id'] != $post['user_id']) {
                if (isset($users[$post['last_edit_user_id']])) {
                    $post['post_edit_user_th'] = $users[$post['last_edit_user_id']];
                } else {
                    $user = $this->getModelFromCache('XenForo_Model_User')->getUserById($post['last_edit_user_id']);
                    $users[$post['last_edit_user_id']] = $user;
                    $post['post_edit_user_th'] = $user;
                }
            }
        }
        return $posts;
    } /* END _prepareEditedPosts */
}