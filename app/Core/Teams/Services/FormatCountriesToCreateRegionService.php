<?php

namespace App\Core\Teams\Services;

use App\Core\Teams\Models\Country;
use Illuminate\Support\Collection;

class FormatCountriesToCreateRegionService
{

    public function execute(Collection $countries)
    {
        return $countries->map($this->mapReplaceSetAttributeCountries());

    }

    private function mapReplaceSetAttributeCountries(): callable
    {
        return function (Country $country, $key) {
            return [
                'id_country' => $country->country_id,
                'name'       => mb_convert_encoding($country->name, 'UTF-8', 'UTF-8'),
            ];

        };
    }

}