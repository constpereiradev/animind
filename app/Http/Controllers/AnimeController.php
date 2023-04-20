<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Anime;

class AnimeController extends Controller
{
    //


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

        $id = Anime::find();

        if(is_null($id)){
            return $this->sendErrot('Anime não encontrado.');
        };

        return response()->json([
            "success" => true,
            "message" => "Anime encontrado com sucesso.",
            "data" => $id
            ]);
    }

    public function update(Request $request, Anime $anime){

        $input = $request->all();

        $input->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'link' => ['required'],
        ]);

        if($validator->fails()){
            return $this->sendError('Erro de validação.', $validator->errors());       
        }

        $anime->title = $input['title'];
        $anime->description = $input['description'];
        $anime->description = $input['link'];
        $anime->save();

        return response()->json([
            "success" => true,
            "message" => "Anime atualizado com sucesso.",
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
