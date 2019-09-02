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

    public function deleteObituary(Request $request, $id)
    {
        $obi = obituary::find($id);
        $obi->delete();
        return \redirect()->back();
    }

    public function storeObituary(Request $request)
    {
      $obi = obituary::create($request->all());
      $obi->save();
      return \redirect(route('dashboard'));
    }




    public function floristIndex()
    {

    }
}
