<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ThemeOption extends Composer
{

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'search_hero_zone' => get_field('search_hero_zone', 'option'),
            'category_search_hero_zones' => get_field('category_search_hero_zone', 'option'),
        ];
    }
}
