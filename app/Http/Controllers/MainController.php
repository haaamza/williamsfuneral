<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\obituary;

class MainController extends Controller
{
    public function index()
    {
      $obis = obituary::latest()->limit(4)->get();
      return view('pages.home',\compact('obis'));
    }
}
