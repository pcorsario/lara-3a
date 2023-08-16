@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Estudiantes
                    </div>
                    <div class="card-body">
                        Estas seguro de eliminar a {{$student->nombres}} {{$student->apellidos}} ?
                        <span>     
        <form action="{{ route('students.show', $student->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="ELIMINAR" class="btn btn-danger">
            <a href="{{route('cancelar')}}" class="btn btn-warning" type="submit">Cancelar</a>
                        </form>
                        

                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection