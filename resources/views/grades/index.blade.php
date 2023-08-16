@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
           
          
           
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cursoss Mensajes
                        <span><a href="{{route('grades.create')}}" class="btn btn-primary">Crear nuevo</a></span>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Ide</td>
                                <td>Curso</td>
                                
                            </tr>
                            @foreach ($grades as $grade)
                            <tr>
                                <td>{{$grade->id}}</td>
                                <td>{{$grade->nombres}}</td>
                            </tr>
                            @endforeach                          
                        </table>
                    </div>
                </div>
            </div>
        </div>
   
            {{session('status')}}
    </div>
@endsection

