@extends('layouts.app')
@section('title','Crear')
@section('content')
   <form action="{{route('juegos.store')}}" method="POST" class="bg-white w-1/3 P-4 border-gray-100 shadow-xl rounded-lg">
    @csrf
        <h2 class="text-2xl text-center py-4 mb-4 font semibold">Agregar Nuevo Juego</h2>
        <input class='my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900'type="text" id='titulo' name='titulo' placeholder="Titulo del Juego">
        @error('titulo')
            <small style="color:red;">{{$message}}</small>
        @enderror
        
        <input class='my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900'type="text" id='genero' name='genero' placeholder="Genero del Juego">
        @error('genero')
            <small style="color:red;">{{$message}}</small>
        @enderror
        
        <input class='my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900'type="number" value='0.00' id='precio' name='precio' placeholder="Precio del Juego">
        @error('precio')
            <small style="color:red;">{{$message}}</small>
        @enderror

        <button type="submit" class="my-3 bg-blue-500 w-full p-2 font semibold rounded text-white hover:bg-blue-600">Agregar</button>
    </form>
@endsection