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

    public function upload(Request $request)
    {
        echo $request->file('imagem')->store('public');
    }

    public function pesquisa(Request $request)
    {
        echo $request->get('teste');
    }

}
