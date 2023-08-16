@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Actulización de estudiantes
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.update', $student->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                  <label for="inputPassword6" class="col-form-label">Apellidos</label>
                                </div>
                                <div class="col-auto">
                                  <input type="text" value="{{ $student->apellidos}}" name="txt_ape" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                                <div class="col-auto">
                                  <span id="passwordHelpInline" class="form-text">
                                    El formato de Apellidos es (Ejm. Mendez Jurado).
                                  </span>
                                </div>
                              </div>
                            <br>
                              <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                  <label for="inputPassword6" class="col-form-label">Nombres        </label>
                                </div>
                                <div class="col-auto">
                                  <input type="text" value="{{ $student->nombres}}" name="txt_nom" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                                <div class="col-auto">
                                  <span id="passwordHelpInline" class="form-text">
                                    Deberá ingresar sus dos Nombres.
                                  </span>
                                </div>
                              </div>

                              <br>
                              <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                  <label for="inputPassword6" class="col-form-label">Telefono</label>
                                </div>
                                <div class="col-auto">
                                  <input type="text" value="{{ $student->telefono}}" name="txt_tel" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                                <div class="col-auto">
                                  <span id="passwordHelpInline" class="form-text">
                                    Deberá ingresar un número de télefono válido.
                                  </span>
                                </div>
                              </div>

                              <br>
                              <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                  <label for="inputPassword6" class="col-form-label">Especi</label>
                                </div>
                                <div class="col-auto">
                                  <input type="text" value="{{ $student->especialidad}}" name="txt_esp" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                                <div class="col-auto">
                                  <span id="passwordHelpInline" class="form-text">
                                    Deberá ingresar sus especialidad (Ejm. Informática).
                                  </span>
                                </div>
                              </div>

                              <br>
                              <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                  <label for="inputPassword6" class="col-form-label">Curso</label>
                                </div>
                                <div class="col-auto">
                                  <input type="text" value="{{ $student->curso}}" name="txt_cur" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                                <div class="col-auto">
                                  <span id="passwordHelpInline" class="form-text">
                                    Deberá ingresar su Curso
                                  </span>
                                </div>
                              </div>

                              <br>
                              <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                  <label for="inputPassword6" class="col-form-label">Paralelo</label>
                                </div>
                                <div class="col-auto">
                                  <input type="text" value="{{ $student->paralelo}}" name="txt_paralelo" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                                <div class="col-auto">
                                  <span id="passwordHelpInline" class="form-text">
                                    Deberá ingresar su Paralelo
                                  </span>
                                </div>
                              </div>

                              <br>
                              <button class="btn btn-info" type="submit">Actualizar</button>
                              <a href="{{route('cancelar')}}" class="btn btn-danger" 
                              type="submit">Cancelar</a>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection