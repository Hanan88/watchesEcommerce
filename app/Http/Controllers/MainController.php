<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class MainController extends Controller
{
    public function language($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
