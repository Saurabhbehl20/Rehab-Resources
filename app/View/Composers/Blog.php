<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Blog extends Composer
{

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'index',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'hero_zone'               => get_field('hero_zone', 184),
        ];
    }
}
