@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">xxxx</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Id</td>
                                <td>Descripcio</td>
                                <td>Serie</td>
                                <td>Estado</td>
                                <td>Precio</td>
                            </tr>
                            @foreach ($computers as $computer)
                            <tr>
                                <td>{{$computer->id}}</td>
                                <td>{{$computer->descripcion}}</td>
                                <td>{{$computer->nroserie}}</td>
                                <td>{{$computer->estado}}</td>
                                <td>{{$computer->precio}}</td>
                            </tr>
                            @endforeach                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection