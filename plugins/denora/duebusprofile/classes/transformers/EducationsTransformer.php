<?php namespace Denora\Duebusprofile\Classes\Transformers;

use Denora\Duebusprofile\Models\Education;

class EducationsTransformer {

    /**
     * @param Education[] $educations
     *
     * @return array
     */
    static function transform($educations) {
        $array = [];

        if ($educations == null) return $array;

        foreach ($educations as $education) {
            array_push($array, EducationTransformer::transform($education));
        }

        return $array;
    }

}