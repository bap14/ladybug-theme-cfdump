<?php
/**
 * Copyright 2017 PHPAS2
 *
 * PHP Version ~5.6.5|~7.0.0
 *
 * @author   Brett <bap14@users.noreply.github.com>
 */

namespace Ladybug\Theme\CFDump;

use Ladybug\Theme\AbstractTheme;
use Ladybug\Theme\HtmlThemeInterface;
use Ladybug\Format;

class CFDumpTheme extends AbstractTheme implements HtmlThemeInterface
{
    public function getName() {
        return 'CFDump';
    }

    public function getParent() {
        return 'Modern';
    }

    public function getHtmlCssDependendies() {
        return array(
            'css/styles.css'
        );
    }

    public function getHtmlJsDependencies() {
        return array();
    }

    public function getFormats()
    {
        return array(
            Format\HtmlFormat::FORMAT_NAME
        );
    }
}