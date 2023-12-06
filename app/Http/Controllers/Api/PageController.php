<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class PageController extends Controller
{
    public function index() {

        $projects = Project::with('type')->get();

        return response()->json($projects);
    }
}