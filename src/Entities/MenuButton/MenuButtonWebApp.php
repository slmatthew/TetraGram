<?php

namespace Slmatthew\Tetragram\Entities\MenuButton;

use Slmatthew\Tetragram\Entities\WebAppInfo;

/**
 * @method string     getText()   Text on the button
 * @method WebAppInfo getWebApp() Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Alternatively, a t.me link to a Web App of the bot can be specified in the object instead of the Web App's URL, in which case the Web App will be opened as if the user pressed the link.
 */
class MenuButtonWebApp extends MenuButton
{
    protected static function subEntities(): array
    {
        return [
            'web_app' => WebAppInfo::class,
        ];
    }

    protected static function presetData(): array
    {
        return [
            'type' => self::TYPE_WEB_APP,
        ];
    }
}
