<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Value;

class ValuesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'Value' => 'required'
        ]);

        // Hvis der er skrevet en værdi
        $value = new Value;
        $value->value = $request->input('Value');

        $value->save();

        return redirect('/');

    }

    public function getValues() {
        $values = Value::all();
        return view('/seeList')->with('values', $values);
    }
}
