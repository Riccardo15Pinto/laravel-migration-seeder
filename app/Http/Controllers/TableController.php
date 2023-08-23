<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;


class TableController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('table', compact('trains'));
    }
}
