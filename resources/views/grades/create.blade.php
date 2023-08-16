@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Forms de Curso
                    </div>
                    <div class="card-body">
                        <form action="{{ route('grades.store') }}" method="post">
                            @csrf
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                  <label for="inputPassword6" class="col-form-label">Curso        </label>
                                </div>
                                <div class="col-auto">
                                  <input type="text" name="txt_nom" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                                <div class="col-auto">
                                  <span id="passwordHelpInline" class="form-text">
                                    Deberá ingresar wl nombre del curso.
                                  </span>
                                </div>
                              </div>
                              <br>
                              <button class="btn btn-success" type="submit">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
