<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eccube\Framework\View;

use Eccube\Application;
use Eccube\Framework\View;

class InstallView extends View
{
    public function __construct($template_dir, $compile_dir = COMPILE_REALDIR)
    {
        parent::__construct();

        $this->_smarty->template_dir = realpath($template_dir);
        $this->_smarty->compile_dir = realpath($compile_dir);
    }
}
