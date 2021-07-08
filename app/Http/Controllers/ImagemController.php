<?php

namespace App\Http\Controllers;

use App\Models\Imagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImagemController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function pesquisa(Request $request)
    {
        $estado = $request->estado;
        $cidade = $request->cidade;
        $dataInicial = $request->dataInicial;
        $dataFinal = $request->dataFinal;

        $imagens = DB::table('imagens')
            ->where('estado', '=', $request->estado)
            ->orWhere('cidade', '=', $request->cidade)
            ->get();

        foreach($imagens as $imagem) {
            echo $imagem->estado . ' - ' . $imagem->cidade . " ||| ";
        }
    }

    public function download(Request $request)
    {

        $imagem = $request->query('imagem');

        return Storage::download('/imagens/' . $imagem);
    }

    public function store(Request $request)
    {
        $estado = $request->estado;
        $cidade = $request->cidade;
        $caminho = $request->file('imagem')->store('imagens/' . $estado . '/' . $cidade);

        Imagem::create([
            'estado' => $estado,
            'cidade' => $cidade,
            'data' => $request->data,
            'caminho_imagem' => $caminho
        ]);

        return view('imagem.upload');
    }

}
