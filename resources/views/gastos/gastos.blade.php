@extends('layouts.app')
@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Gastos</div>
                <div class="card-body">
                    <form id="formGastos">
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre del gasto" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="estado" id="estado">
                                    <label class="form-check-label" for="estado">
                                        Estado
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary" id="guardar" onclick="guardarGasto()">
                                    Guardar
                                </button>
                            </div>
                        </div>
                        <tabla-gastos></tabla-gastos>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
