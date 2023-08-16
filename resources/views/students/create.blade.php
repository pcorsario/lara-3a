@extends('layouts.admintw')
@section('content')
<!-- component -->
<div class="grid full-h-screen place-items-center">
  <div class="p-12 bg-white">
    {{-- <h1 class="text-xl font-semibold">Hello there ?, <span class="font-normal">please fill in your information to continue</span></h1> --}}
    <form class="mt-6" action="{{ route('students.store') }}" method="post">
      @csrf
      <div class="flex justify-between gap-3">
        <span class="w-1/2">
          <label for="txt_ape" class="block text-xs font-semibold text-gray-600 uppercase">Apellidos</label>
          <input name="txt_ape" id="txt_ape" type="text" placeholder="Mendez Jurado" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
        </span>
        <span class="w-1/2">
          <label for="txt_nom" class="block text-xs font-semibold text-gray-600 uppercase">Nombres</label>
        <input name="txt_nom" id="txt_nom" type="text" placeholder="Janine Jessenia" autocomplete="family-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
        </span>
      </div>
      <label for="txt_tel" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Telefono</label>
      <input id="txt_tel" type="txt_tel" name="txt_tel" placeholder="0982933626" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
      <label for="txt_esp" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Especialidad</label>
      <input id="txt_esp" type="text" name="txt_esp" placeholder="Informatica" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
      <div class="flex justify-between gap-3">
        <span class="w-1/2">
          <label for="txt_cur" class="block text-xs font-semibold text-gray-600 uppercase">Curso</label>
          <input name="txt_cur" id="txt_cur" type="text" placeholder="Tercero" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
        </span>
        <span class="w-1/2">
          <label for="txt_paralelo" class="block text-xs font-semibold text-gray-600 uppercase">Paralelo</label>
        <input name="txt_paralelo" id="txt_paralelo" type="text" placeholder="Janine Jessenia" autocomplete="family-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
        </span>
      </div>

      <div class="flex justify-between gap-3">
        <span class="w-1/2">
          <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
            Guardar
          </button>
        </span>
        <span class="w-1/2">
          <br>
          <a href="{{route('cancelar')}}" class="py-3 px-6 text-white rounded-lg bg-green-400 
shadow-lg block md:inline-block">Cancelar</a>
        </span>
      </div>




      
      <p class="flex justify-between inline-block mt-4 text-xs text-gray-500 cursor-pointer hover:text-black">Already registered?</p>
    </form>
  </div>
</div>
@endsection