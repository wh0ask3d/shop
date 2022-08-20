<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class OptionsController extends Controller
{
    public function showOptions()
    {

        $option = Option::first();
        return view('showoptions', ['option' => $option]);
    }
}
