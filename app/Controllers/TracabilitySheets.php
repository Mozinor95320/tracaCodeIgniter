<?php

namespace App\Controllers;

use App\Models\TracabiltySheetsModel;

class TracabiltySheets extends BaseController
{
    public function index()
    {
        $model = model(TracabiltySheetsModel::class);

        $data['tracabiltySheets_list'] = $model->getTracabilitySheets();
    }

    public function show(?string $serialNumber = null)
    {
        $model = model(TracabiltySheetsModel::class);

        $data['tracabiltySheets'] = $model->getTracabilitySheets($serialNumber);
    }
}