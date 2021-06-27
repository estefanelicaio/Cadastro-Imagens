<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagemController extends Controller
{
    
    public function download(Request $request)
    {

        $imagem = $request->query('imagem');

        return Storage::download('/imagens/' . $imagem);
    }


    public function upload() {

        return view('imagem.upload');

    }

}
