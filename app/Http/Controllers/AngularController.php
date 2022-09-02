<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library_list;

class AngularController extends Controller
{
    public function index()
    {
        return view('angular');
    }

    public function getLibraryList()
    {
        return response()->json(Library_list::all(), 200);
    }
}
