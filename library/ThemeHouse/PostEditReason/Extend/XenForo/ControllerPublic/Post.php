<?php

/**
 *
 * @see XenForo_ControllerPublic_Post
 */
class ThemeHouse_PostEditReason_Extend_XenForo_ControllerPublic_Post extends XFCP_ThemeHouse_PostEditReason_Extend_XenForo_ControllerPublic_Post
{
    /**
     *
     * @see XenForo_ControllerPublic_Post::actionSaveInline()
     */
    public function actionSaveInline()
    {
        $this->_assertPostOnly();
        if ($this->_input->inRequest('more_options')) {
            return $this->responseReroute(__CLASS__, 'edit');
        }
        
        $GLOBALS['XenForo_ControllerPublic_Post'] = $this;
        return parent::actionSaveInline();
    } /* END actionSaveInline */

    /**
     *
     * @see XenForo_ControllerPublic_Post::actionSave()
     */
    public function actionSave()
    {
        $GLOBALS['XenForo_ControllerPublic_Post'] = $this;
        return parent::actionSave();
    } /* END actionSave */
}