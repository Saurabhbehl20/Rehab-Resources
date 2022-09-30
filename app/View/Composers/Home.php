<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Home extends Composer
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
            'hero_zone'    => get_field('hero_zone'),
            'annual_impact_zone'    => get_field('annual_impact_zone'),
            'two_column_zone_left_image'    => get_field('two_column_zone_left_image'),
            'therapy_zone'    => get_field('therapy_zone'),
            'services_zone'    => get_field('services_zone'),
            'two_column_zone_right_image'    => get_field('two_column_zone_right_image'),
            'leadership_zone'    => get_field('leadership_zone'),
            'team_zone'    => get_field('team_zone'),
            'testimonial_zone'    => get_field('testimonial_zone'),
            
        ];
    }
}
