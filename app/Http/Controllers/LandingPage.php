<?php

namespace App\Http\Controllers;

use App\Models\materi_pembelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPage extends Controller
{
    public function index()
    {
        $materi_pembelajaran = materi_pembelajaran::get();
        $count = materi_pembelajaran::count();
        return view('AlQudsy.home', compact('materi_pembelajaran', 'count'));
    }
}
