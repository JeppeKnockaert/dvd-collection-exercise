<?php

namespace App\Http\Controllers;

use function view;

class DvdController extends Controller
{
    public function index()
    {
        // TODO: Send the right data to the dvd-collection view

        return view('dvd-collection');
    }
}
