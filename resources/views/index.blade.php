@extends('layout')

@section('principal')

<section class="container">
    <form action="/pesquisar" method="POST">
    @csrf
        <div class="row">
            <div class="col-md-3">
                <label for="inputEstado" class="form-label">Estado</label>
                <select class="form-select" name="estado" id="inputEstado">
                    <option selected disabled value="">Selecione</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="inputCidade" class="form-label">Cidade</label>
                <select class="form-select" name="cidade" id="inputCidade">
                    <option selected disabled value="">Selecione</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Niterói">Niterói</option>
                    <option value="Itaguaí">Itaguaí</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="inputDataInicial" class="form-label">Data Inicial</label>
                <input type="date" class="form-control" name="dataInicial" id="inputDataInicial">
            </div>
            <div class="col-md-3">
                <label for="inputDataFinal" class="form-label">Data Final</label>
                <input type="date" class="form-control" name="dataFinal" id="inputDataFinal">
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button class="btn btn-primary btn-lg col-md-4" type="submit">Pesquisar</button>
        </div>
    </form>
</section>

<section class="pt-2 pb-5 bg-light mt-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
            <div class="col">
                <div class="card shadow-sm">
                    <a href="/storage/imagens/rj.jpg" target="_blank"><img src="/storage/imagens/rj.jpg" class="card-img-top imagem-card" alt="..."></a>
                    <div class="card-body">
                        <ul class="card-text">
                            <li><span class="fw-bold">Estado: </span>Rio de Janeiro</li>
                            <li><span class="fw-bold">Cidade: </span>Rio de Janeiro</li>
                            <li><span class="fw-bold">Data: </span>07/05/2019</li>
                            <div class="d-flex justify-content-end align-items-center">
                                <button type="button" class="btn">
                                    <a href="/download?imagem=rj.jpg">
                                        <img src="/storage/icons/download-solid.svg" width="20em">
                                    </a>
                                </button>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <a href="/storage/imagens/sp.jpg" target="_blank"><img src="/storage/imagens/sp.jpg" class="card-img-top imagem-card" alt="..."></a>
                    <div class="card-body">
                        <ul class="card-text">
                            <li><span class="fw-bold">Estado: </span>São Paulo</li>
                            <li><span class="fw-bold">Cidade: </span>São Paulo</li>
                            <li><span class="fw-bold">Data: </span>02/07/2015</li>
                            <div class="d-flex justify-content-end align-items-center"><a href="/download?imagem=sp.jpg"><button type="button" class="btn"><img src="/storage/icons/download-solid.svg" width="20em"></a></button></div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <a href="/storage/imagens/rj2.png" target="_blank"><img src="/storage/imagens/rj2.png" class="card-img-top imagem-card" alt="..."></a>
                    <div class="card-body">
                        <ul class="card-text">
                            <li><span class="fw-bold">Estado: </span>Rio de Janeiro</li>
                            <li><span class="fw-bold">Cidade:</span> Niterói</li>
                            <li><span class="fw-bold">Data: </span>14/11/2020</li>
                            <div class="d-flex justify-content-end align-items-center"><a href="/download?imagem=rj2.png"><button type="button" class="btn"><img src="/storage/icons/download-solid.svg" width="20em"></a></button></div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <a href="/storage/imagens/mg.jpg" target="_blank"><img src="/storage/imagens/mg.jpg" class="card-img-top imagem-card" alt="..."></a>
                    <div class="card-body">
                        <ul class="card-text">
                            <li><span class="fw-bold">Estado: </span>Minas Gerais</li>
                            <li><span class="fw-bold">Cidade:</span> Belo Horizonte</li>
                            <li><span class="fw-bold">Data: </span>11/02/2018</li>
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="/download?imagem=mg.jpg">
                                    <button type="button" class="btn">
                                        <img src="/storage/icons/download-solid.svg" width="20em">
                                    </button>
                                </a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
