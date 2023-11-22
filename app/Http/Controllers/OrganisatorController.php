<?php

namespace App\Http\Controllers;

use App\Models\Organisators;
use Illuminate\Http\Request;

class OrganisatorController extends Controller
{
    public function index(){
        $organisator = response()->json(Organisators::all());
        return $organisator;
    }

    public function show($id){
        $organisator = response()->json(Organisators::find($id));
        return $organisator;
    }

    public function store(Request $request){
        $organisator = new Organisators();
        $organisator->name = $request->name;
        $organisator->description = $request->description;
        $organisator->save();
    }

    public function update(Request $request, $id){
        $organisator = Organisators::find($id);
        $organisator->name = $request->name;
        $organisator->description = $request->description;
        $organisator->save();
    }

    public function destroy($id){
        Organisators::find($id)->delete();
    }
}
