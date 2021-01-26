<?php


namespace Ling\Light_TaskScheduler\Light_PluginInstaller;


use Ling\Light_PluginInstaller\PluginInstaller\LightBasePluginInstaller;


/**
 * The LightLoginNotifierPluginInstaller class.
 */
class LightLoginNotifierPluginInstaller extends LightBasePluginInstaller
{


    /**
     * @overrides
     */
    protected function registerTableScope(): array
    {
        return [
            "lln_connexion",
        ];
    }


}