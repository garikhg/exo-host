<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class MegaMenu extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.mega-menu',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'menu_items' => $this->getMegaMenu(),
        ];
    }

    /**
     * @return array|false|void
     */
    public function getMegaMenu()
    {
        $menus = wp_get_nav_menus();
        $menu_locations = get_nav_menu_locations();
        $location_id = $menu_locations['primary_navigation'];

        if (isset($menu_locations['primary_navigation']) && $menu_locations['primary_navigation'] != 0) {
            foreach ($menus as $menu) {
                if ($menu->term_id === $menu_locations['primary_navigation']) {
                    return wp_get_nav_menu_items($menu);
                }
            }
        }

        return false;
    }
}
