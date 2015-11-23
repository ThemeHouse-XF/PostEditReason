<?php

class ThemeHouse_PostEditReason_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/PostEditReason/Extend/XenForo/ControllerPublic/Post.php' => '6442cf9b36f75680639737212cd7fe78',
                'library/ThemeHouse/PostEditReason/Extend/XenForo/ControllerPublic/Thread.php' => '2ee60ae4f46b669559b3912c9f515dd1',
                'library/ThemeHouse/PostEditReason/Extend/XenForo/DataWriter/DiscussionMessage/Post.php' => 'b0e47e2cdadbeee32dba7157467290e9',
                'library/ThemeHouse/PostEditReason/Install/Controller.php' => '32d30d221afcfc0c4fd7a3ae1c95ae26',
                'library/ThemeHouse/PostEditReason/Listener/LoadClass.php' => '4835aa0447c836835d9329861621ab6d',
                'library/ThemeHouse/PostEditReason/Option/UserGroupChooser.php' => '2682c9849c5c54507fe1931eb2469c94',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}