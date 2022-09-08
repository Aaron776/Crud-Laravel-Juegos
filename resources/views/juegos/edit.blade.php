@extends('layouts.app')
@section('title','Editar')
@section('content')
   <form action="{{route('juegos.update',$juego->id)}}" method="POST" class="bg-white w-1/3 P-4 border-gray-100 shadow-xl rounded-lg">
    @csrf
    @method('PUT')
        <h2 class="text-2xl text-center py-4 mb-4 font semibold">Editar Juego</h2>
        <input class='my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900'type="text" id='titulo' name='titulo' placeholder="Titulo del Juego" value="{{$juego->titulo}}">
        <input class='my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900'type="text" id='genero' name='genero' placeholder="Genero del Juego" value="{{$juego->genero}}">
        <input class='my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900'type="number" id='precio' name='precio' placeholder="Precio del Juego" value="{{$juego->precio}}">
        <button type="submit" class="my-3 bg-green-500 w-full p-2 font semibold rounded text-white hover:bg-green-600">Guardar</button>
    </form>
@endsection