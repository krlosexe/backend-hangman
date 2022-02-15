<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoriesController extends Controller
{
    public function GetCategories() :Object 
    {
        try {
            
            $categories  = Categories::get();
            return response()->json($categories, 200);

        } catch (ModelNotFoundException $exception) {

            $response["success"] = false;
            $response["message"] = $exception->getMessage();
            return response()->json($response)->setStatusCode(400);
            
        }
    }
}
