<?php

namespace App\CompositePattern\Taxonomy\Traits;

trait DashHelper
{
    /**
     * @param integer $count
     * @return string
     */
    public function getDashes(int $count)
    {
        $dash = '';
        for ($i = 0; $i < $count; $i++) {
            $dash = $dash . '-';
        }

        return $dash;
    }
}
