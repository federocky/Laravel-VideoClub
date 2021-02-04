<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class CatalogController extends Controller {


    
    public function getIndex() {
        return view('catalog.index', ['arrayPeliculas' => Movie::all() ]);
    }

    public function getShow($id) {
        return view('catalog.show', ['pelicula' => Movie::findOrFail($id)]);
    }

    public function getCreate(){
        return view('catalog.create');
    }

    public function getEdit($id){
        return view('catalog.edit', ['pelicula' => Movie::findOrFail($id)]);
	}
	
	public function validateEdit(){

		request()->validate([

			'title' => 'required',
			'anio' => 'required|min:3',
			'director' => 'required',
			'poster' => 'required',
			'synopsis' => 'required'

		]);

		return 'Datos validados';

	}
}
