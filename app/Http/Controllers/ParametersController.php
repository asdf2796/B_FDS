<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parameter;
use DB;

class ParametersController extends Controller
{
    public function getParameters () {
      $parameters = Parameter::orderBy('id','ASC')->get();

      return view('test',compact('parameters'));
    }

    public function postUpdate(Request $request) {
      for ($i=1; $i <= 6 ; $i++) {
        $parameter = Parameter::find($i);
        $parameter->value = abs($request->input($i));
        $parameter->save();
      }

      return back()->with('update_success','Configuration Updated Successfully');
    }
}
