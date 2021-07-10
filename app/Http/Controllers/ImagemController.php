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
        $imagens = DB::table('imagens')->orderByDesc('id')->get();

        return view('index', ['imagens' => $imagens]);
    }

    public function pesquisa(Request $request)
    {
        $estado = $request->estado;
        $cidade = $request->cidade;
        $dataInicial = $request->dataInicial;
        $dataFinal = $request->dataFinal;

        $imagens = DB::table('imagens')
            ->when($estado, function($query, $estado) {
                return $query->where('estado', '=', $estado);
            })
            ->when($cidade, function($query, $cidade) {
                return $query->where('cidade', '=', $cidade);
            })
            ->when($dataInicial, function($query, $dataInicial) {
                return $query->where('data', '>=', $dataInicial);
            })
            ->when($dataFinal, function($query, $dataFinal) {
                return $query->where('data', '<=', $dataFinal);
            })
            ->orderByDesc('id')
            ->get();

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
