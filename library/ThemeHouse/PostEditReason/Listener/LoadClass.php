<?php

class ThemeHouse_PostEditReason_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_PostEditReason' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_Post',
                    'XenForo_ControllerPublic_Thread'
                ), /* END 'controller' */
                'datawriter' => array(
                    'XenForo_DataWriter_DiscussionMessage_Post'
                ), /* END 'datawriter' */
            ), /* END 'ThemeHouse_PostEditReason' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_PostEditReason_Listener_LoadClass', $class, $extend, 'controller');
    } /* END loadClassController */

    public static function loadClassDataWriter($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_PostEditReason_Listener_LoadClass', $class, $extend, 'datawriter');
    } /* END loadClassDataWriter */
}