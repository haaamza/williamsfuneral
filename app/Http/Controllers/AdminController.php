<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\obituary;
use App\Florist;

class AdminController extends Controller
{
    public function dashboard()
    {
      $obi = obituary::all();
      return view('auth.dashboard', \compact('obi'));
    }

    public function editObituary(Request $request, $id)
    {
      $obi = obituary::find($id);
      return view('auth.obituries.edit', \compact('obi'));
    }

    public function editFlorist(Request $request, $id)
    {
      $flo = Florist::find($id);
      return view('auth.florist.edit', \compact('flo'));
    }

    public function updateObituary(Request $request, $id)
    {
      $obi = obituary::find($id);

      $obi->name = $request['name'];
      $obi->dob = $request['dob'];
      $obi->dod = $request['dod'];
      $obi->state = $request['state'];
      $obi->city = $request['city'];
      $obi->zip = $request['zip'];
      $obi->description = $request['desc'];
      $obi->save();

      return \redirect(route('dashboard'));
    }
    public function updateFlorist(Request $request, $id)
    {
      $obi = Florist::find($id);

      $obi->name = $request['name'];
      $obi->number = $request['number'];
      $obi->address = $request['address'];
      $obi->url = $request['url'];
      $obi->save();

      return \redirect(route('florist-index'));
    }

    public function deleteObituary(Request $request, $id)
    {
        $obi = obituary::find($id);
        $obi->delete();
        return \redirect()->back();
    }
    public function deleteFlorist(Request $request, $id)
    {
        $obi = Florist::find($id);
        $obi->delete();
        return \redirect()->back();
    }

    public function storeObituary(Request $request)
    {
      $obi = obituary::create($request->all());
      $obi->save();
      return \redirect(route('dashboard'));
    }
    public function storeFlorist(Request $request)
    {
      $obi = Florist::create($request->all());
      $obi->save();
      return \redirect(route('florist-index'));
    }




    public function floristIndex()
    {
      $flo = Florist::all();
      return view('auth.florist.index',\compact('flo'));
    }
}
