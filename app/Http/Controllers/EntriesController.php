<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class EntriesController extends Controller
{
    //
    public function index() {
        $entries = Entry::all();

        return view('entries.index', ['entries'=>$entries]);
    }
}
