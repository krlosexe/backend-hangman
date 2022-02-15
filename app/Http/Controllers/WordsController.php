<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Words;
use App\Models\Categories;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class WordsController extends Controller
{
    public function GetWordsByCategoria (int $id_category) :Object
    {
        try {

            $response = Words::where('id_category',$id_category)->inRandomOrder()->first();
            return response()->json($response, 200);

        } catch (ModelNotFoundException $exception) {

            $response["success"] = false;
            $response["message"] = $exception->getMessage();
            return response()->json($response)->setStatusCode(400);
            
        }
    }
}
