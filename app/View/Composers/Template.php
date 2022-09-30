<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Template extends Composer
{

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-team',
        'partials.content-about',
        'partials.content-careers',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'leadership_zone' => get_field('leadership_zone'),
            'about_intro' => get_field('about_intro'),
            'about_two_column_content' => get_field('about_two_column_content'),
            'about_full_width_content' => get_field('about_full_width_content'),
            'career_intro_zone'   => get_field('intro_zone'),
            'career_benefits_zone'     => get_field('benefits_zone'),
            'career_position_zone'     => get_field('position_zone'),
        ];
    }
}
