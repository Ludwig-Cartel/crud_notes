<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class ApiController extends Controller
{
    public function create(Request $request){
        $data = new Data();
        $data->name = $request->input('name');
        $data->notes = $request->input('notes');

        $data->save();
        return response()->json($data);
    } 

    public function show(){
        $data = Data::all();
        return response()->json($data);
    } 

    public function showById($id){
        $data = Data::find($id);
        return response()->json($data);
    } 

    public function updateById(Request $request, $id){
        $data = Data::find($id);
        $data->name = $request->input('name');
        $data->notes = $request->input('notes');

        $data->save();
        return response()->json($data);
    }

    public function deleteData($id){
        $data = Data::find($id);
        $data->delete();
        return response()->json($data);
    }
    
 }

