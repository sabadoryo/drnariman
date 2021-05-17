<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class SettingController extends Controller
{
    public function index()
    {
        $settings = QueryBuilder::for(Setting::class)
            ->get();

        return $this->cresponse('All settings', $settings);
    }
}
