<?php

namespace Arcplg\Admin\Widgets\Navbar;

use Arcplg\Admin\Admin;
use Illuminate\Contracts\Support\Renderable;

/**
 * Class FullScreen.
 *
 * @see  https://javascript.ruanyifeng.com/htmlapi/fullscreen.html
 */
class Fullscreen implements Renderable
{
    public function render()
    {
        return Admin::component('admin::components.fullscreen');
    }
}
