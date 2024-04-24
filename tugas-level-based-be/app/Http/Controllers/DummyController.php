<?php

namespace App\Http\Controllers;

use App\Models\Dummy;
use Illuminate\Http\Request;

class DummyController extends Controller
{
    public function index()
    {
        $dummies = Dummy::all();
        return response()->json($dummies);
    }
}
