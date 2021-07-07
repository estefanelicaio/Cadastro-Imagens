@extends('layout')

@section('principal')
    <div class="bg-light">
        <div class="container py-5">
            <form class="row g-3 d-flex justify-content-center" action="/upload" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-3">
                    <label for="ListaDeEstados" class="form-label">Estado</label>
                    <input class="form-control" list="datalistEstados" id="ListaDeEstados" placeholder="Pesquisar...">
                    <datalist id="datalistEstados">
                        <option value="Rio de Janeiro">
                        <option value="São Paulo">
                        <option value="Espírito Santo">
                        <option value="Minas Gerais">
                        <option value="Distrito Federal">
                    </datalist>
                </div>
                <div class="col-md-3">
                    <label for="inputCidade" class="form-label">Cidade</label>
                    <select id="inputCidade" class="form-select">
                        <option selected disabled value="">Selecione</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="NI">Niterói</option>
                        <option value="IT">Itaguaí</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputDataInicial" class="form-label">Data</label>
                    <input type="date" class="form-control" id="inputDataInicial">
                </div>
                <div class="col-md-3">
                    <label for="inputImagem" class="form-label">Imagem</label>
                    <input type="file" class="form-control" id="inputImagem" name="imagem">
                </div>

                <div class="d-flex justify-content-center mt-5">
                    <button class="btn btn-primary btn-lg col-md-4" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection