<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/beichen-share-config/src/SmartyConfig/Bc',
            S_ROOT.'vendor/qixinyun/beichen-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/beichen-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
