@extends('layout')

@section('principal')
    <div class="bg-light">
        <div class="container py-5">
            <form class="row g-3 d-flex justify-content-center" action="/enviar" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-3">
                    <label for="inputEstados" class="form-label">Estado</label>
                    <input class="form-control" list="datalistEstados" id="inputEstados" name="estado" placeholder="Pesquisar...">
                    <datalist id="datalistEstados">
                        <option value="Rio de Janeiro">
                        <option value="São Paulo">
                        <option value="Espírito Santo">
                        <option value="Minas Gerais">
                        <option value="Distrito Federal">
                    </datalist>
                </div>
                <div class="col-md-3">
                    <label for="inputCidades" class="form-label">Cidade</label>
                    <input class="form-control" list="datalistCidades" id="inputCidades" name="cidade" placeholder="Pesquisar...">
                    <datalist id="datalistCidades">
                        <option value="Rio de Janeiro">
                        <option value="São Paulo">
                        <option value="Niterói">
                        <option value="Cruzeiro">
                        <option value="Guará">
                    </datalist>
                </div>
                <div class="col-md-3">
                    <label for="inputData" class="form-label">Data</label>
                    <input type="date" class="form-control" name="data" id="inputData">
                </div>
                <div class="col-md-3">
                    <label for="inputImagem" class="form-label">Imagem</label>
                    <input type="file" class="form-control" name="imagem" id="inputImagem">
                </div>

                <div class="d-flex justify-content-center mt-5">
                    <button class="btn btn-primary btn-lg col-md-4" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
