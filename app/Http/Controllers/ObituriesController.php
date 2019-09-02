<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\obituary;
use App\Condolence;

class ObituriesController extends Controller
{
    public function details(Request $request, $id)
    {
        $ob = obituary::with('condolences')->where('id',$id)->first();
        return view('obituaries.details', \compact('ob'));
    }

    public function createCondolence(Request $request)
    {
      if(isset($_POST['id'])){
        $obi = obituary::find($_POST['id']);
        if(isset($obi)){
          $c = Condolence::create([
            'condolence'=>$_POST['textarea'],
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'obituaries_id'=>$_POST['id']
          ]);

          $c->save();
          return \redirect()->back();
        }
      }
    }
}
