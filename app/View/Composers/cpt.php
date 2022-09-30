<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class cpt extends Composer
{

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-outpatients',
        'partials.content-single-therapist',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'map' => get_field('map', get_the_ID()),
            'services_zone' => get_field('services_zone'),   

            'services_zone' => get_field('services_zone'),
            'education_zone' => get_field('education_zone')
        ];
    }
}
