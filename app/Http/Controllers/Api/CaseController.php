<?php

namespace App\Http\Controllers\Api;

use App\Models\CovidCase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Http\Resources\CovidCaseResource;

class CaseController extends Controller
{
    public function index()
    {
        return CovidCaseResource::collection(Cache::remember('cases', 60*60*24, function () {
            return CovidCase::all();
        }));
    }
}
