@extends('layouts.admintw')
@section('content')
<div class="max-w-sm w-full lg:max-w-full lg:flex">
    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url({{asset('img/basura.png')}})" title="Woman holding a mug">
    </div>
    <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
      <div class="mb-8">
        <p class="text-sm text-gray-600 flex items-center">
          <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
          </svg>
          Formulario de eliminación
        </p>
        <div class="text-gray-900 font-bold text-xl mb-2">Estas seguro de eliminar a {{$student->nombres}} {{$student->apellidos}} ?</div>
        <p class="text-gray-700 text-base">Recuerda que si lo eliminas, destruiras todo su contenido y para que vuelvas a mostrar a este usuario tienes que darle de alta en el formulario de crear.</p>
      </div>
      <div class="flex items-center">
        <form action="{{ route('students.show', $student->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="ELIMINAR" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
            <a href="{{route('cancelar')}}" class="py-3 px-6 text-white rounded-lg bg-green-400 
            shadow-lg block md:inline-block" type="submit">Cancelar</a>
                        </form>
                        <br>
                        <hr>

        
          <a href="https://www.flaticon.es/iconos-gratis/usuario" title="usuario iconos">Iconos creados por Freepik - Flaticon</a>
        </div>
      </div>
    </div>
  </div>
@endsection