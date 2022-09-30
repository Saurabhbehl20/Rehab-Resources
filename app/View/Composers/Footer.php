<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Footer extends Composer
{

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.footer',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'footer_logo'           => get_field('footer_logo','option'),
            'footer_contact'        => get_field('footer_contact_heading','option'),
            'footer_address'        => get_field('footer_address','option'),
            'footer_email'          => get_field('footer_email','option'),
            'footer_phone'          => get_field('footer_phone','option'),
            'footer_menu_heading'   => get_field('footer_menu_heading','option'),
            'socials'               => get_field('socials','option'),
        ];
    }
}
