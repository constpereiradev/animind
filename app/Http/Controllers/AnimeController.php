<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Anime;

class AnimeController extends Controller
{
    //


    public function index(){
        $animes = Anime::all();
        return $animes;
    }

    public function store(Request $request){


        
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Erro ao validar.', $validator->errors());       
        }

        $anime = Anime::create($input);
        
        return response()->json([
            "success" => true,
            "message" => "Anime criado com sucesso.",
            "data" => $anime
        ]);

        
            
    }

    public function show($id){

        $id = Anime::find($id);

        if(is_null($id)){
            return $this->sendErrot('Anime não encontrado.');
        };

        return response()->json([
            "success" => true,
            "message" => "Anime encontrado com sucesso.",
            "data" => $id
            ]);
    }

    public function update(Request $request, $id){

        $input = $request->all();

        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        if($validator->fails()){
        return $this->sendError('Validation Error.', $validator->errors());       
        }

        $anime = Anime::findOrFail($id);
        $anime->title = $input['title'];
        $anime->description = $input['description'];
        $anime->link = $input['link'];
        $anime->save();

        return response()->json([
        "success" => true,
        "message" => "Product updated successfully.",
        "data" => $anime
        ]);

    }

    public function destroy(Anime $anime){

        $anime->delete();

        return response()->json([
            "success" => true,
            "message" => "Anime deletado com sucesso.",
            "data" => $anime
            ]);

    }
}
