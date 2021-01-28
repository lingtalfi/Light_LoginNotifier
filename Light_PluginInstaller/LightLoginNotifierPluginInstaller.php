<?php


namespace Ling\Light_LoginNotifier\Light_PluginInstaller;


use Ling\Light_PluginInstaller\PluginInstaller\LightBasePluginInstaller;


/**
 * The LightLoginNotifierPluginInstaller class.
 */
class LightLoginNotifierPluginInstaller extends LightBasePluginInstaller
{



    //--------------------------------------------
    // TableScopeAwareInterface
    //--------------------------------------------
    /**
     * @implementation
     */
    public function getTableScope(): array
    {
        return [
            "lln_connexion",
        ];
    }


}