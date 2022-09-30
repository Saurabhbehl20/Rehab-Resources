<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.header',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'header_slider' => get_field('header_slider', 'option'),
            'header_logo' => get_field('header_logo', 'option'),
            'outpatient'   => get_field('outpatient','option'),
        ];
    }
}
