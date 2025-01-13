<?php

namespace App\Models;

use CodeIgniter\Model;

class TracabiltySheetsModel extends Model
{
    protected $table = 'tracabilitySheets';

    /**
     * @param false|string $slug
     *
     * @return array|null
     */
    public function getTracabilitySheets($serialNumber = false)
    {
        if ($serialNumber === false) {
            return $this->findAll();
        }

        return $this->where(['serialNumber' => $serialNumber])->first();
    }
}