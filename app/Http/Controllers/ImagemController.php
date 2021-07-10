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
        $imagens = DB::table('imagens')->get();

        return view('index', ['imagens' => $imagens]);
    }

    public function pesquisa(Request $request)
    {
        $estado = $request->estado;
        $cidade = $request->cidade;
        $dataInicial = $request->dataInicial;
        $dataFinal = $request->dataFinal;

        $imagens = DB::table('imagens')->get();

        if(isset($estado)) {
            $imagens = $imagens->where('estado', '=', $estado);
        }
        if(isset($cidade)) {
            $imagens = $imagens->where('cidade', '=', $cidade);
        }
        if(isset($dataInicial)) {
            $imagens = $imagens->where('data', '>', $dataInicial);
        }
        if(isset($dataFinal)) {
            $imagens = $imagens->where('data', '<', $dataFinal);
        }

        return view('index', ['imagens' => $imagens]);
    }

    public function download(Request $request)
    {
        $imagem = $request->query('imagem');
        return Storage::download($imagem);
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
