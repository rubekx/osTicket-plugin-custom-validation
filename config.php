<?php

require_once INCLUDE_DIR . 'class.plugin.php';

class OauthPluginConfig extends PluginConfig
{

    // Provide compatibility function for versions of osTicket prior to
    // translation support (v1.9.4)
    public function translate()
    {
        if (!method_exists('Plugin', 'translate')) {
            return array(
                function ($x) {return $x;},
                function ($x, $y, $n) {return $n != 1 ? $y : $x;},
            );
        }
        return Plugin::translate('custom-form-validation');
    }

    public function getOptions()
    {
        list($__, $_N) = self::translate();
        return array(
            /* *** */
        );
    }
}
