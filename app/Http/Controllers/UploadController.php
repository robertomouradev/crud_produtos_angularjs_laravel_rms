<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(Request $request)
    {
    	
		if ($request->hasFile('imagem')) {			
			$image = $request->file('imagem');
			$name = time().'.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/images');
			$image->move($destinationPath, $name);
			return response()->json([
				'message'   => '/images/'.$name,
			], 200);
		}
		
		return response()->json([
			'message'   => "",
		], 200);
		
    }
}
